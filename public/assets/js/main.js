// public/assets/js/main.js
// Flash message auto-remove
document.addEventListener('DOMContentLoaded', function() {
    // Auto-remove flash messages after 5 seconds
    const flashMessages = document.querySelectorAll('.flash-message');
    flashMessages.forEach(flash => {
        setTimeout(() => {
            flash.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => flash.remove(), 300);
        }, 5000);
    });

    // Add slideOutRight animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideOutRight {
            from { opacity: 1; transform: translateX(0); }
            to { opacity: 0; transform: translateX(100px); }
        }
    `;
    document.head.appendChild(style);
});

// Form loading states
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function() {
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
            }
        });
    });
});

// Time ago function for activities
function timeAgo(dateString) {
    const date = new Date(dateString);
    const now = new Date();
    const diffInSeconds = Math.floor((now - date) / 1000);
    
    if (diffInSeconds < 60) return 'Just now';
    if (diffInSeconds < 3600) return `${Math.floor(diffInSeconds / 60)} minutes ago`;
    if (diffInSeconds < 86400) return `${Math.floor(diffInSeconds / 3600)} hours ago`;
    if (diffInSeconds < 604800) return `${Math.floor(diffInSeconds / 86400)} days ago`;
    return date.toLocaleDateString();
}

// Update all time elements on page load
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.activity-time').forEach(element => {
        const dateString = element.textContent.trim();
        if (dateString) {
            element.textContent = timeAgo(dateString);
        }
    });
});