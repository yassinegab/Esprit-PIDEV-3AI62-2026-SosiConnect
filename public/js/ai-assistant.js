class AiAssistant {
    constructor() {
        this.videoPreview     = document.getElementById('videoPreview');
        this.avatarPlaceholder= document.getElementById('avatarPlaceholder');
        this.statusIndicator  = document.getElementById('statusIndicator');
        this.cameraBtn        = document.getElementById('cameraBtn');
        this.micBtn           = document.getElementById('micBtn');
        this.recordBtn        = document.getElementById('recordBtn');
        this.recordingStatus  = document.getElementById('recordingStatus');
        this.chatMessages     = document.getElementById('chatMessages');
        this.chatInput        = document.getElementById('chatInput');
        this.sendBtn          = document.getElementById('sendBtn');
        this.loadingOverlay   = document.getElementById('loadingOverlay');

        this.mediaStream      = null;
        this.isListening      = false;
        this.recognition      = null;
        this.conversationId   = null;

        this.speechSynthesis  = window.speechSynthesis;

        this.csrfToken = this.getCsrfToken();

        this._initSpeechRecognition();
        this.init();
    }

    getCsrfToken() {
        const tokenInput = document.querySelector('input[name="_csrf_token"]');
        return tokenInput ? tokenInput.value : '';
    }

    /* ── Web Speech API Setup ─────────────────────────────────────── */
    _initSpeechRecognition() {
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

        if (!SpeechRecognition) {
            console.warn('Web Speech API not supported in this browser.');
            this.recognition = null;
            return;
        }

        this.recognition = new SpeechRecognition();
        this.recognition.lang          = window._speechLang || 'fr-FR';
        this.recognition.interimResults = false;
        this.recognition.maxAlternatives = 1;
        this.recognition.continuous    = false;

        this.recognition.onstart = () => {
            this.isListening = true;
            this.recordBtn.classList.add('recording');
            this.recordingStatus.classList.add('active');
        };

        this.recognition.onresult = async (event) => {
            const transcript = event.results[0][0].transcript.trim();
            if (transcript) {
                this.addMessage('user', transcript);
                await this.sendToAI(transcript);
            } else {
                this.showError('Aucune parole détectée. Veuillez réessayer.');
            }
        };

        this.recognition.onerror = (event) => {
            let msg = 'Erreur de reconnaissance vocale.';
            switch (event.error) {
                case 'not-allowed':
                    msg = 'Accès au microphone refusé. Veuillez autoriser l\'accès.'; break;
                case 'no-speech':
                    msg = 'Aucune parole détectée. Parlez plus fort et réessayez.'; break;
                case 'network':
                    msg = 'Erreur réseau lors de la reconnaissance vocale.'; break;
                case 'audio-capture':
                    msg = 'Microphone introuvable ou non disponible.'; break;
                case 'aborted':
                    return; // user stopped manually
            }
            this.showError(msg);
        };

        this.recognition.onend = () => {
            this.isListening = false;
            this.recordBtn.classList.remove('recording');
            this.recordingStatus.classList.remove('active');
        };
    }

    /* ── Event Listeners ─────────────────────────────────────────── */
    init() {
        this.cameraBtn.addEventListener('click', () => this.toggleCamera());
        this.micBtn.addEventListener('click',    () => this.toggleMic());
        this.recordBtn.addEventListener('click', () => this.toggleListening());
        this.sendBtn.addEventListener('click',   () => this.sendMessage());
        this.chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') this.sendMessage();
        });
    }

    /* ── Camera ──────────────────────────────────────────────────── */
    async toggleCamera() {
        if (this.mediaStream && this.mediaStream.getVideoTracks().length > 0) {
            this.stopCamera();
        } else {
            await this.startCamera();
        }
    }

    async startCamera() {
        try {
            this.mediaStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
            this.videoPreview.srcObject = this.mediaStream;
            this.videoPreview.classList.add('active');
            this.avatarPlaceholder.classList.add('hidden');
            this.statusIndicator.classList.add('active');
            this.statusIndicator.querySelector('.status-text').textContent = 'Caméra active';
            this.cameraBtn.classList.add('active');
            if (this.mediaStream.getAudioTracks()[0]) {
                this.micBtn.classList.add('active');
            }
        } catch (error) {
            console.error('Camera error:', error);
            this.showError('Impossible d\'accéder à la caméra. Vérifiez les permissions.');
        }
    }

    stopCamera() {
        if (this.mediaStream) {
            this.mediaStream.getTracks().forEach(t => t.stop());
            this.mediaStream = null;
        }
        this.videoPreview.srcObject = null;
        this.videoPreview.classList.remove('active');
        this.avatarPlaceholder.classList.remove('hidden');
        this.statusIndicator.classList.remove('active');
        this.statusIndicator.querySelector('.status-text').textContent = 'Caméra désactivée';
        this.cameraBtn.classList.remove('active');
        this.micBtn.classList.remove('active');
    }

    toggleMic() {
        if (this.mediaStream) {
            const track = this.mediaStream.getAudioTracks()[0];
            if (track) {
                track.enabled = !track.enabled;
                this.micBtn.classList.toggle('active', track.enabled);
            }
        }
    }

    /* ── Voice Recognition ───────────────────────────────────────── */
    toggleListening() {
        if (!this.recognition) {
            this.showError('La reconnaissance vocale n\'est pas supportée par ce navigateur. Utilisez Chrome ou Edge.');
            this.chatInput.focus();
            return;
        }

        if (this.isListening) {
            this.recognition.stop();
        } else {
            // Always pick up the latest selected language before starting
            const langSel = document.getElementById('langSelect');
            this.recognition.lang = (langSel ? langSel.value : null)
                                  || window._speechLang
                                  || 'fr-FR';
            try {
                this.recognition.start();
            } catch (e) {
                this.recognition.stop();
                setTimeout(() => {
                    try { this.recognition.start(); } catch (_) {}
                }, 300);
            }
        }
    }

    /* ── Chat ────────────────────────────────────────────────────── */
    async sendMessage() {
        const message = this.chatInput.value.trim();
        if (!message) return;

        this.addMessage('user', message);
        this.chatInput.value = '';
        await this.sendToAI(message);
    }

    async sendToAI(message) {
        this.showLoading(true);

        try {
            const response = await fetch('/api/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': this.csrfToken
                },
                body: JSON.stringify({
                    message: message,
                    conversationId: this.conversationId
                })
            });

            const data = await response.json();

            if (data.error) {
                this.showError(data.error);
                return;
            }

            this.conversationId = data.conversationId;
            this.addMessage('assistant', data.response);

            if (data.emotionAnalysis) {
                this.updateEmotionDisplay(data.emotionAnalysis);
            }

            this.speakWithBrowserTTS(data.response);

        } catch (error) {
            console.error('Chat error:', error);
            this.showError('Erreur de communication avec l\'IA : ' + error.message);
        } finally {
            this.showLoading(false);
        }
    }

    /* ── Text-to-Speech (browser native) ────────────────────────── */
    speakWithBrowserTTS(text) {
        if (!this.speechSynthesis) return;

        this.speechSynthesis.cancel();

        const utterance = new SpeechSynthesisUtterance(text);
        utterance.rate   = 1.0;
        utterance.pitch  = 1.0;
        utterance.volume = 1.0;

        const voices = this.speechSynthesis.getVoices();
        const frVoice = voices.find(v => v.lang.startsWith('fr'))
                     || voices.find(v => v.lang.startsWith('en'))
                     || voices[0];

        if (frVoice) utterance.voice = frVoice;

        this.speechSynthesis.speak(utterance);
    }

    /* ── Helpers ─────────────────────────────────────────────────── */
    addMessage(role, content) {
        const div  = document.createElement('div');
        div.className = `message ${role}`;

        const time = new Date().toLocaleTimeString('fr-FR', {
            hour:   'numeric',
            minute: '2-digit',
            hour12: false
        });

        div.innerHTML = `
            <div class="message-content">
                <p>${this.escapeHtml(content).replace(/\n/g, '<br>')}</p>
            </div>
            <div class="message-time">${time}</div>
        `;

        this.chatMessages.appendChild(div);
        this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
    }

    updateEmotionDisplay(emotionData) {
        const emotionEl = document.getElementById('currentEmotion');
        const stressEl  = document.getElementById('currentStress');

        const moodLabels = {
            'joy':     '😊 Heureux',
            'calm':    '😌 Calme',
            'neutral': '😐 Neutre',
            'anxious': '😰 Anxieux',
            'sad':     '😢 Triste',
            'angry':   '😠 Colère'
        };

        if (emotionEl) {
            emotionEl.textContent = moodLabels[emotionData.mood] || emotionData.mood;
        }

        const score = emotionData.stressScore || 0;
        if (stressEl) {
            stressEl.textContent = `${score}%`;
            stressEl.className   = 'stress-value';
            if (score < 30)       stressEl.classList.add('stress-low');
            else if (score < 60)  stressEl.classList.add('stress-medium');
            else                  stressEl.classList.add('stress-high');
        }
    }

    showLoading(show) {
        this.loadingOverlay.classList.toggle('active', show);
    }

    showError(message) {
        const div = document.createElement('div');
        div.className = 'message assistant';
        div.innerHTML = `
            <div class="message-content" style="background:rgba(239,68,68,.1);border-color:rgba(239,68,68,.3);">
                <p style="color:#dc2626;"><i class="fas fa-exclamation-triangle me-1"></i>${this.escapeHtml(message)}</p>
            </div>
        `;
        this.chatMessages.appendChild(div);
        this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
    }

    escapeHtml(text) {
        const d = document.createElement('div');
        d.textContent = text;
        return d.innerHTML;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    // Pre-load voices (required by some browsers)
    if (window.speechSynthesis) {
        window.speechSynthesis.getVoices();
        window.speechSynthesis.addEventListener('voiceschanged', () => {
            window.speechSynthesis.getVoices();
        });
    }
    new AiAssistant();
});
