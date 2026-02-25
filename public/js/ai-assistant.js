class AiAssistant {
    constructor() {
        this.videoPreview = document.getElementById('videoPreview');
        this.avatarPlaceholder = document.getElementById('avatarPlaceholder');
        this.statusIndicator = document.getElementById('statusIndicator');
        this.cameraBtn = document.getElementById('cameraBtn');
        this.micBtn = document.getElementById('micBtn');
        this.recordBtn = document.getElementById('recordBtn');
        this.recordingStatus = document.getElementById('recordingStatus');
        this.chatMessages = document.getElementById('chatMessages');
        this.chatInput = document.getElementById('chatInput');
        this.sendBtn = document.getElementById('sendBtn');
        this.loadingOverlay = document.getElementById('loadingOverlay');
        this.emotionIndicator = document.getElementById('emotionIndicator');
        
        this.mediaStream = null;
        this.mediaRecorder = null;
        this.audioChunks = [];
        this.isRecording = false;
        this.conversationId = null;
        
        this.speechSynthesis = window.speechSynthesis;
        this.useBrowserTTS = false;
        
        this.csrfToken = this.getCsrfToken();
        
        this.init();
    }

    getCsrfToken() {
        const tokenInput = document.querySelector('input[name="_csrf_token"]');
        return tokenInput ? tokenInput.value : '';
    }

    init() {
        this.cameraBtn.addEventListener('click', () => this.toggleCamera());
        this.micBtn.addEventListener('click', () => this.toggleMic());
        this.recordBtn.addEventListener('click', () => this.toggleRecording());
        this.sendBtn.addEventListener('click', () => this.sendMessage());
        this.chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') this.sendMessage();
        });
    }

    async toggleCamera() {
        if (this.mediaStream && this.mediaStream.getVideoTracks().length > 0) {
            this.stopCamera();
        } else {
            await this.startCamera();
        }
    }

    async startCamera() {
        try {
            this.mediaStream = await navigator.mediaDevices.getUserMedia({
                video: true,
                audio: true
            });
            
            this.videoPreview.srcObject = this.mediaStream;
            this.videoPreview.classList.add('active');
            this.avatarPlaceholder.classList.add('hidden');
            this.statusIndicator.classList.add('active');
            this.statusIndicator.querySelector('.status-text').textContent = 'Camera Active';
            this.cameraBtn.classList.add('active');
            
            const audioTrack = this.mediaStream.getAudioTracks()[0];
            if (audioTrack) {
                this.micBtn.classList.add('active');
            }
        } catch (error) {
            console.error('Camera access error:', error);
            this.showError('Unable to access camera. Please check permissions.');
        }
    }

    stopCamera() {
        if (this.mediaStream) {
            this.mediaStream.getTracks().forEach(track => track.stop());
            this.mediaStream = null;
        }
        
        this.videoPreview.srcObject = null;
        this.videoPreview.classList.remove('active');
        this.avatarPlaceholder.classList.remove('hidden');
        this.statusIndicator.classList.remove('active');
        this.statusIndicator.querySelector('.status-text').textContent = 'Camera Off';
        this.cameraBtn.classList.remove('active');
        this.micBtn.classList.remove('active');
    }

    toggleMic() {
        if (this.mediaStream) {
            const audioTrack = this.mediaStream.getAudioTracks()[0];
            if (audioTrack) {
                audioTrack.enabled = !audioTrack.enabled;
                this.micBtn.classList.toggle('active', audioTrack.enabled);
            }
        }
    }

    async toggleRecording() {
        if (this.isRecording) {
            this.stopRecording();
        } else {
            await this.startRecording();
        }
    }

    async startRecording() {
        try {
            if (!this.mediaStream) {
                this.mediaStream = await navigator.mediaDevices.getUserMedia({
                    audio: {
                        echoCancellation: true,
                        noiseSuppression: true,
                        autoGainControl: true
                    }
                });
                this.micBtn.classList.add('active');
            }

            this.audioChunks = [];
            
            let mimeType = 'audio/webm';
            if (!MediaRecorder.isTypeSupported('audio/webm')) {
                mimeType = 'audio/mp4';
            }
            
            this.mediaRecorder = new MediaRecorder(this.mediaStream, {
                mimeType: mimeType
            });

            this.mediaRecorder.ondataavailable = (event) => {
                if (event.data.size > 0) {
                    this.audioChunks.push(event.data);
                }
            };

            this.mediaRecorder.onstop = () => {
                this.processAudio();
            };

            this.mediaRecorder.start(200);
            this.isRecording = true;
            
            this.recordBtn.classList.add('recording');
            this.recordingStatus.classList.add('active');
        } catch (error) {
            console.error('Recording error:', error);
            this.showError('Unable to start recording. Please check microphone permissions.');
        }
    }

    stopRecording() {
        if (this.mediaRecorder && this.isRecording) {
            this.mediaRecorder.stop();
            this.isRecording = false;
            
            this.recordBtn.classList.remove('recording');
            this.recordingStatus.classList.remove('active');
        }
    }

    async processAudio() {
        const audioBlob = new Blob(this.audioChunks, { type: 'audio/webm' });
        
        if (audioBlob.size < 1000) {
            this.showError('Audio too short. Please speak longer.');
            return;
        }
        
        this.showLoading(true);
        
        try {
            const response = await fetch('/api/stt', {
                method: 'POST',
                headers: {
                    'Content-Type': 'audio/webm',
                    'X-CSRF-Token': this.csrfToken
                },
                body: audioBlob
            });

            const data = await response.json();
            
            if (data.error) {
                this.showError(data.error);
                return;
            }
            
            if (data.transcript && data.transcript.trim()) {
                this.addMessage('user', data.transcript);
                await this.sendToAI(data.transcript);
            } else {
                this.showError('Could not understand audio. Please try again and speak clearly.');
            }
        } catch (error) {
            console.error('STT error:', error);
            this.showError('Failed to process audio: ' + error.message);
        } finally {
            this.showLoading(false);
        }
    }

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
            
            await this.speakText(data.response);
            
        } catch (error) {
            console.error('Chat error:', error);
            this.showError('Failed to communicate with AI: ' + error.message);
        } finally {
            this.showLoading(false);
        }
    }

    async speakText(text) {
        this.showLoading(false);
        
        if (this.useBrowserTTS || !this.speechSynthesis) {
            this.speakWithBrowserTTS(text);
            return;
        }
        
        try {
            const response = await fetch('/api/tts', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': this.csrfToken
                },
                body: JSON.stringify({ text: text })
            });

            const data = await response.json();
            
            if (!data.success || !data.audio) {
                console.log('API TTS failed, falling back to browser TTS');
                this.useBrowserTTS = true;
                this.speakWithBrowserTTS(text);
                return;
            }

            const audioBytes = this.base64ToArrayBuffer(data.audio);
            const contentType = data.contentType || 'audio/mp3';
            const audioBlob = new Blob([audioBytes], { type: contentType });
            const audioUrl = URL.createObjectURL(audioBlob);
            
            const audio = new Audio(audioUrl);
            await audio.play();
            
            audio.onended = () => {
                URL.revokeObjectURL(audioUrl);
            };
            
        } catch (error) {
            console.error('TTS error:', error);
            this.speakWithBrowserTTS(text);
        }
    }

    speakWithBrowserTTS(text) {
        if (!this.speechSynthesis) {
            console.log('Browser does not support speech synthesis');
            return;
        }
        
        this.speechSynthesis.cancel();
        
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.rate = 1.0;
        utterance.pitch = 1.0;
        utterance.volume = 1.0;
        
        const voices = this.speechSynthesis.getVoices();
        const englishVoice = voices.find(v => v.lang.startsWith('en') && v.name.includes('Female')) 
                          || voices.find(v => v.lang.startsWith('en'))
                          || voices[0];
        
        if (englishVoice) {
            utterance.voice = englishVoice;
        }
        
        this.speechSynthesis.speak(utterance);
    }

    base64ToArrayBuffer(base64) {
        const binaryString = window.atob(base64);
        const len = binaryString.length;
        const bytes = new Uint8Array(len);
        for (let i = 0; i < len; i++) {
            bytes[i] = binaryString.charCodeAt(i);
        }
        return bytes.buffer;
    }

    addMessage(role, content) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${role}`;
        
        const time = new Date().toLocaleTimeString('en-US', {
            hour: 'numeric',
            minute: '2-digit',
            hour12: true
        });
        
        messageDiv.innerHTML = `
            <div class="message-content">
                <p>${this.escapeHtml(content).replace(/\n/g, '<br>')}</p>
            </div>
            <div class="message-time">${time}</div>
        `;
        
        this.chatMessages.appendChild(messageDiv);
        this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
    }

    updateEmotionDisplay(emotionData) {
        const emotionElement = document.getElementById('currentEmotion');
        const stressElement = document.getElementById('currentStress');
        
        const moodLabels = {
            'joy': 'Happy',
            'calm': 'Calm',
            'neutral': 'Neutral',
            'anxious': 'Anxious',
            'sad': 'Sad',
            'angry': 'Angry'
        };
        
        emotionElement.textContent = moodLabels[emotionData.mood] || emotionData.mood;
        
        const stressScore = emotionData.stressScore || 0;
        stressElement.textContent = `${stressScore}%`;
        
        stressElement.className = 'stress-value';
        if (stressScore < 30) {
            stressElement.classList.add('stress-low');
        } else if (stressScore < 60) {
            stressElement.classList.add('stress-medium');
        } else {
            stressElement.classList.add('stress-high');
        }
    }

    showLoading(show) {
        this.loadingOverlay.classList.toggle('active', show);
    }

    showError(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'message assistant';
        errorDiv.innerHTML = `
            <div class="message-content" style="background: rgba(220, 53, 69, 0.1);">
                <p style="color: #dc3545;">${this.escapeHtml(message)}</p>
            </div>
        `;
        this.chatMessages.appendChild(errorDiv);
        this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
    }

    escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    if (window.speechSynthesis) {
        window.speechSynthesis.getVoices();
    }
    new AiAssistant();
});
