// Janjua Tailors - Shared JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation Toggle
    const navToggle = document.getElementById('navToggle');
    const mobileNav = document.getElementById('mobileNav');
    const navbar = document.getElementById('navbar');

    if (navToggle && mobileNav) {
        navToggle.addEventListener('click', function() {
            navToggle.classList.toggle('active');
            mobileNav.classList.toggle('active');
            document.body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : '';
        });

        // Close mobile nav when clicking on a link
        const mobileNavLinks = mobileNav.querySelectorAll('a');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', function() {
                navToggle.classList.remove('active');
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Close mobile nav when clicking outside
        document.addEventListener('click', function(e) {
            if (!navToggle.contains(e.target) && !mobileNav.contains(e.target)) {
                navToggle.classList.remove('active');
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // Navbar scroll effect
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form validation helpers (skip for auth forms)
    const forms = document.querySelectorAll('form:not([action*="login"]):not([action*="register"])');
    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, select, textarea');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });

            input.addEventListener('input', function() {
                if (this.classList.contains('error')) {
                    validateField(this);
                }
            });
        });

        form.addEventListener('submit', function(e) {
            let isValid = true;
            inputs.forEach(input => {
                if (!validateField(input)) {
                    isValid = false;
                }
            });

            if (!isValid) {
                e.preventDefault();
            }
        });
    });

    function validateField(field) {
        const value = field.value.trim();
        const type = field.type;
        const required = field.hasAttribute('required');
        
        // Remove existing error styling
        field.classList.remove('error');
        const existingError = field.parentNode.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }

        // Check if required field is empty
        if (required && !value) {
            showFieldError(field, 'This field is required');
            return false;
        }

        // Email validation
        if (type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                showFieldError(field, 'Please enter a valid email address');
                return false;
            }
        }

        // Password validation
        if (type === 'password' && value && value.length < 8) {
            showFieldError(field, 'Password must be at least 8 characters long');
            return false;
        }

        return true;
    }

    function showFieldError(field, message) {
        field.classList.add('error');
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.textContent = message;
        errorDiv.style.color = '#ff6b6b';
        errorDiv.style.fontSize = '14px';
        errorDiv.style.marginTop = '8px';
        field.parentNode.appendChild(errorDiv);
    }

    // Loading states for buttons
    const submitButtons = document.querySelectorAll('button[type="submit"], .btn-submit');
    submitButtons.forEach(button => {
        button.addEventListener('click', function() {
            // For auth forms, just show loading state without validation check
            const isAuthForm = this.form && (this.form.action.includes('login') || this.form.action.includes('register'));
            
            if (isAuthForm || (this.form && this.form.checkValidity())) {
                this.classList.add('loading');
                this.disabled = true;
                const originalText = this.textContent;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                
                // Reset after 10 seconds as fallback
                setTimeout(() => {
                    this.classList.remove('loading');
                    this.disabled = false;
                    this.textContent = originalText;
                }, 10000);
            }
        });
    });

    // Fade in animations on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.card, .section-header, .product-card').forEach(el => {
        observer.observe(el);
    });
});

// Utility functions
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <span>${message}</span>
            <button class="notification-close">&times;</button>
        </div>
    `;
    
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(20px);
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        z-index: 10000;
        transform: translateX(400px);
        transition: transform 0.3s ease;
        max-width: 300px;
    `;

    if (type === 'success') {
        notification.style.borderColor = 'rgba(34, 197, 94, 0.5)';
        notification.style.background = 'rgba(34, 197, 94, 0.1)';
    } else if (type === 'error') {
        notification.style.borderColor = 'rgba(239, 68, 68, 0.5)';
        notification.style.background = 'rgba(239, 68, 68, 0.1)';
    }

    document.body.appendChild(notification);

    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);

    // Close functionality
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', () => {
        notification.style.transform = 'translateX(400px)';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    });

    // Auto close after 5 seconds
    setTimeout(() => {
        if (document.body.contains(notification)) {
            notification.style.transform = 'translateX(400px)';
            setTimeout(() => {
                if (document.body.contains(notification)) {
                    document.body.removeChild(notification);
                }
            }, 300);
        }
    }, 5000);
}

// Export for use in other scripts
window.JanjuaTailors = {
    showNotification
};