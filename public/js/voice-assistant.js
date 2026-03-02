class VoiceAssistant {
    constructor() {
        this.recognition = null;
        this.synthesis = window.speechSynthesis;
        this.isListening = false;
        this.isEnabled = true;
        this.language = 'fr-FR';
        this.initRecognition();
    }

    initRecognition() {
        if ('webkitSpeechRecognition' in window || 'SpeechRecognition' in window) {
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
            this.recognition = new SpeechRecognition();
            this.recognition.continuous = false;
            this.recognition.interimResults = false;
            this.recognition.lang = this.language;

            this.recognition.onresult = (event) => {
                const text = event.results[0][0].transcript;
                this.processCommand(text);
            };

            this.recognition.onend = () => {
                this.isListening = false;
                this.updateUI();
            };

            this.recognition.onerror = (event) => {
                console.error('Voice recognition error:', event.error);
                this.isListening = false;
                this.updateUI();
                this.showError('Erreur de reconnaissance vocale: ' + event.error);
            };
        } else {
            console.warn('Speech recognition not supported');
            this.isEnabled = false;
        }
    }

    startListening() {
        if (!this.isEnabled || !this.recognition) {
            this.showError('La reconnaissance vocale n\'est pas supportée par votre navigateur.');
            return;
        }

        if (this.isListening) {
            this.stopListening();
            return;
        }

        try {
            this.isListening = true;
            this.recognition.start();
            this.updateUI();
            this.speak('Je vous écoute...');
        } catch (error) {
            console.error('Error starting recognition:', error);
            this.isListening = false;
            this.updateUI();
        }
    }

    stopListening() {
        if (this.recognition) {
            this.recognition.stop();
        }
        this.isListening = false;
        this.updateUI();
    }

    async processCommand(text) {
        this.showTranscript(text);
        
        try {
            const response = await fetch('/voice/process', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ text: text }),
            });

            const data = await response.json();

            this.speak(data.response);

            if (data.redirect) {
                setTimeout(() => {
                    window.location.href = data.redirect;
                }, 1500);
            }
        } catch (error) {
            console.error('Error processing command:', error);
            this.speak('Désolé, une erreur est survenue.');
        }
    }

    speak(text) {
        if (this.synthesis) {
            this.synthesis.cancel();
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = this.language;
            utterance.rate = 0.9;
            utterance.pitch = 1;
            this.synthesis.speak(utterance);
        }
    }

    updateUI() {
        const btn = document.getElementById('voiceAssistantBtn');
        const status = document.getElementById('voiceStatus');
        
        if (btn) {
            if (this.isListening) {
                btn.classList.add('listening');
                btn.innerHTML = '<span class="mic-icon">🎤</span><span class="pulse"></span>';
            } else {
                btn.classList.remove('listening');
                btn.innerHTML = '<span class="mic-icon">🎤</span>';
            }
        }

        if (status) {
            status.textContent = this.isListening ? 'Écoute en cours...' : 'Cliquez pour parler';
        }
    }

    showTranscript(text) {
        const container = document.getElementById('voiceTranscript');
        if (container) {
            container.textContent = text;
            container.classList.add('show');
            setTimeout(() => {
                container.classList.remove('show');
            }, 3000);
        }
    }

    showError(message) {
        const container = document.getElementById('voiceError');
        if (container) {
            container.textContent = message;
            container.classList.add('show');
            setTimeout(() => {
                container.classList.remove('show');
            }, 3000);
        }
    }

    toggle() {
        if (this.isListening) {
            this.stopListening();
        } else {
            this.startListening();
        }
    }
}

// Initialize voice assistant
let voiceAssistant = null;

document.addEventListener('DOMContentLoaded', function() {
    voiceAssistant = new VoiceAssistant();
    
    // Auto-show tip on page load (10% chance)
    if (Math.random() < 0.1) {
        fetch('/voice/tip')
            .then(res => res.json())
            .then(data => {
                const tipContainer = document.getElementById('dailyTip');
                if (tipContainer) {
                    tipContainer.textContent = data.tip;
                    tipContainer.classList.add('show');
                }
            });
    }
});

// Keyboard shortcut (Ctrl/Cmd + Shift + V)
document.addEventListener('keydown', function(e) {
    if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.key === 'V') {
        e.preventDefault();
        if (voiceAssistant) {
            voiceAssistant.toggle();
        }
    }
});
