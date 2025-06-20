// public/js/ai-assistant.js
document.addEventListener('DOMContentLoaded', function() {
    // Charger les recommandations
    function loadRecommendations() {
        fetch('/ai/recommendations', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            // Afficher les recommandations
            displayRecommendations(data);
        });
    }

    // Chatbot
    function sendChatMessage(message) {
        fetch('/ai/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ message: message })
        })
        .then(response => response.json())
        .then(data => {
            displayChatResponse(data.response);
        });
    }
});