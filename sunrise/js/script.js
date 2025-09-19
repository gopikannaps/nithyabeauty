// Sunrise Times JavaScript - Interactive functionality with dynamic designs

class SunriseApp {
    constructor() {
        this.cities = [];
        this.allCitiesVisible = false;
        this.currentTheme = 'day';
        this.animationObserver = null;
        this.init();
    }

    async init() {
        this.setupEventListeners();
        await this.loadCities();
        this.setupAutoComplete();
        this.initDynamicBackground();
        this.initScrollAnimations();
        this.initParticleSystem();
        this.startDynamicUpdates();
    }

    setupEventListeners() {
        // Search input event listeners
        const citySearch = document.getElementById('citySearch');
        const dateInput = document.getElementById('dateInput');
        
        if (citySearch) {
            citySearch.addEventListener('input', this.handleSearchInput.bind(this));
            citySearch.addEventListener('focus', this.showSuggestions.bind(this));
            citySearch.addEventListener('blur', this.hideSuggestions.bind(this));
        }

        // Date input change
        if (dateInput) {
            dateInput.addEventListener('change', this.handleDateChange.bind(this));
        }

        // Click outside to hide suggestions
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.input-group')) {
                this.hideSuggestions();
            }
        });

        // Enter key for search
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && document.activeElement === citySearch) {
                e.preventDefault();
                this.searchSunrise();
            }
        });

        // Window resize for responsive animations
        window.addEventListener('resize', this.handleResize.bind(this));
        
        // Page visibility change for performance optimization
        document.addEventListener('visibilitychange', this.handleVisibilityChange.bind(this));
    }

    async loadCities() {
        try {
            // Create a list of all cities from the PHP backend
            const response = await fetch('api.php?action=getCities');
            if (response.ok) {
                this.cities = await response.json();
            } else {
                // Fallback list of cities
                this.cities = [
                    'Mumbai', 'Delhi', 'Bangalore', 'Hyderabad', 'Chennai', 'Kolkata', 'Pune', 
                    'Ahmedabad', 'Jaipur', 'Surat', 'Lucknow', 'Kanpur', 'Nagpur', 'Indore', 
                    'Thane', 'Bhopal', 'Visakhapatnam', 'Patna', 'Vadodara', 'Ghaziabad', 
                    'Ludhiana', 'Agra', 'Nashik', 'Faridabad', 'Meerut', 'Rajkot', 'Varanasi', 
                    'Srinagar', 'Aurangabad', 'Dhanbad', 'Amritsar', 'Navi Mumbai', 'Allahabad', 
                    'Ranchi', 'Howrah', 'Coimbatore', 'Jabalpur', 'Gwalior', 'Vijayawada', 
                    'Jodhpur', 'Madurai', 'Raipur', 'Kota', 'Guwahati', 'Chandigarh', 'Solapur', 
                    'Hubli–Dharwad', 'Tiruchirappalli', 'Bareilly', 'Mysore'
                ];
            }
        } catch (error) {
            console.error('Error loading cities:', error);
            // Use fallback cities
            this.cities = [
                'Mumbai', 'Delhi', 'Bangalore', 'Hyderabad', 'Chennai', 'Kolkata', 'Pune', 
                'Ahmedabad', 'Jaipur', 'Surat', 'Lucknow', 'Kanpur', 'Nagpur', 'Indore'
            ];
        }
    }

    setupAutoComplete() {
        const searchInput = document.getElementById('citySearch');
        const suggestionsContainer = document.getElementById('searchSuggestions');
        
        if (!searchInput || !suggestionsContainer) return;

        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase().trim();
            
            if (query.length < 2) {
                this.hideSuggestions();
                return;
            }

            const matches = this.cities.filter(city => 
                city.toLowerCase().includes(query)
            ).slice(0, 8); // Limit to 8 suggestions

            this.displaySuggestions(matches, suggestionsContainer);
        });
    }

    displaySuggestions(matches, container) {
        if (matches.length === 0) {
            this.hideSuggestions();
            return;
        }

        container.innerHTML = matches.map(city => 
            `<div class="suggestion-item" onclick="app.selectCityFromSuggestion('${city}')">${city}</div>`
        ).join('');
        
        container.style.display = 'block';
    }

    selectCityFromSuggestion(city) {
        const searchInput = document.getElementById('citySearch');
        if (searchInput) {
            searchInput.value = city;
            this.hideSuggestions();
            this.searchSunrise();
        }
    }

    handleSearchInput(e) {
        const query = e.target.value;
        if (query.length < 2) {
            this.hideSuggestions();
        }
    }

    showSuggestions() {
        const searchInput = document.getElementById('citySearch');
        const query = searchInput.value.toLowerCase().trim();
        
        if (query.length >= 2) {
            const matches = this.cities.filter(city => 
                city.toLowerCase().includes(query)
            ).slice(0, 8);
            
            if (matches.length > 0) {
                this.displaySuggestions(matches, document.getElementById('searchSuggestions'));
            }
        }
    }

    hideSuggestions() {
        setTimeout(() => {
            const suggestionsContainer = document.getElementById('searchSuggestions');
            if (suggestionsContainer) {
                suggestionsContainer.style.display = 'none';
            }
        }, 200);
    }

    handleDateChange() {
        const citySearch = document.getElementById('citySearch');
        if (citySearch && citySearch.value.trim()) {
            this.searchSunrise();
        }
    }

    async searchSunrise() {
        const citySearch = document.getElementById('citySearch');
        const dateInput = document.getElementById('dateInput');
        const resultsSection = document.getElementById('resultsSection');
        const resultCard = document.getElementById('resultCard');

        if (!citySearch || !dateInput || !resultsSection || !resultCard) return;

        const city = citySearch.value.trim();
        const date = dateInput.value;

        if (!city) {
            this.showError('Please enter a city name');
            return;
        }

        // Show loading
        this.showLoading(resultCard);
        resultsSection.style.display = 'block';
        resultsSection.scrollIntoView({ behavior: 'smooth' });

        try {
            const response = await fetch('api.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    action: 'getSunriseTime',
                    city: city,
                    date: date
                })
            });

            const data = await response.json();

            if (data.success) {
                this.displayResult(data.data, resultCard);
            } else {
                this.showError(data.message || 'City not found. Please try another city.');
            }
        } catch (error) {
            console.error('Error fetching sunrise data:', error);
            this.showError('Unable to fetch sunrise data. Please try again.');
        }
    }

    showLoading(container) {
        container.innerHTML = `
            <div class="loading-container">
                <div class="loading"></div>
                <p>Calculating sunrise time...</p>
            </div>
        `;
    }

    displayResult(data, container) {
        const { city, date, sunrise, sunset, coordinates } = data;
        
        container.innerHTML = `
            <div class="result-header">
                <h3><i class="fas fa-map-marker-alt"></i> ${city}</h3>
                <p class="result-date">${date}</p>
            </div>
            <div class="result-times">
                <div class="time-result sunrise-result">
                    <div class="time-icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <div class="time-details">
                        <span class="time-label">Sunrise</span>
                        <span class="time-value">${sunrise}</span>
                    </div>
                </div>
                <div class="time-result sunset-result">
                    <div class="time-icon">
                        <i class="fas fa-moon"></i>
                    </div>
                    <div class="time-details">
                        <span class="time-label">Sunset</span>
                        <span class="time-value">${sunset}</span>
                    </div>
                </div>
            </div>
            <div class="result-coordinates">
                <i class="fas fa-globe"></i>
                <span>Coordinates: ${coordinates.lat.toFixed(2)}°N, ${coordinates.lng.toFixed(2)}°E</span>
            </div>
            <div class="result-actions">
                <button class="share-btn" onclick="app.shareResult('${city}', '${sunrise}', '${sunset}')">
                    <i class="fas fa-share-alt"></i> Share
                </button>
                <button class="copy-btn" onclick="app.copyResult('${city}', '${sunrise}', '${sunset}')">
                    <i class="fas fa-copy"></i> Copy
                </button>
            </div>
        `;

        // Add CSS styles for result display
        this.addResultStyles();
    }

    addResultStyles() {
        const style = document.createElement('style');
        style.textContent = `
            .result-header {
                text-align: center;
                margin-bottom: 2rem;
            }
            .result-header h3 {
                font-size: 2rem;
                color: var(--text-dark);
                margin-bottom: 0.5rem;
            }
            .result-date {
                color: var(--text-light);
                font-size: 1.1rem;
            }
            .result-times {
                display: flex;
                justify-content: space-around;
                margin-bottom: 2rem;
                flex-wrap: wrap;
                gap: 1rem;
            }
            .time-result {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 1.5rem;
                border-radius: 15px;
                min-width: 200px;
                flex: 1;
            }
            .sunrise-result {
                background: var(--gradient-sunrise);
                color: white;
            }
            .sunset-result {
                background: var(--gradient-sunset);
                color: white;
            }
            .time-icon i {
                font-size: 2.5rem;
            }
            .time-details {
                display: flex;
                flex-direction: column;
            }
            .time-label {
                font-size: 0.9rem;
                opacity: 0.9;
                margin-bottom: 0.2rem;
            }
            .time-value {
                font-size: 1.5rem;
                font-weight: 600;
            }
            .result-coordinates {
                text-align: center;
                color: var(--text-light);
                margin-bottom: 2rem;
                font-size: 0.95rem;
            }
            .result-coordinates i {
                margin-right: 0.5rem;
            }
            .result-actions {
                display: flex;
                justify-content: center;
                gap: 1rem;
                flex-wrap: wrap;
            }
            .share-btn, .copy-btn {
                padding: 12px 24px;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                font-weight: 500;
                transition: var(--transition);
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }
            .share-btn {
                background: #3498db;
                color: white;
            }
            .copy-btn {
                background: #2ecc71;
                color: white;
            }
            .share-btn:hover, .copy-btn:hover {
                transform: translateY(-2px);
                box-shadow: var(--shadow);
            }
            .loading-container {
                text-align: center;
                padding: 3rem;
            }
            .loading-container .loading {
                margin: 0 auto 1rem;
            }
            @media (max-width: 768px) {
                .result-times {
                    flex-direction: column;
                }
                .time-result {
                    justify-content: center;
                    text-align: center;
                }
            }
        `;
        
        if (!document.querySelector('style[data-result-styles]')) {
            style.setAttribute('data-result-styles', 'true');
            document.head.appendChild(style);
        }
    }

    showError(message) {
        const resultCard = document.getElementById('resultCard');
        const resultsSection = document.getElementById('resultsSection');
        
        if (resultCard && resultsSection) {
            resultCard.innerHTML = `
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i>
                    <h3>Oops!</h3>
                    <p>${message}</p>
                    <button class="retry-btn" onclick="app.searchSunrise()">
                        <i class="fas fa-redo"></i> Try Again
                    </button>
                </div>
            `;
            
            resultsSection.style.display = 'block';
            this.addErrorStyles();
        }
    }

    addErrorStyles() {
        const style = document.createElement('style');
        style.textContent = `
            .error-message {
                text-align: center;
                padding: 3rem;
                color: #e74c3c;
            }
            .error-message i {
                font-size: 3rem;
                margin-bottom: 1rem;
            }
            .error-message h3 {
                font-size: 1.5rem;
                margin-bottom: 1rem;
                color: #e74c3c;
            }
            .error-message p {
                margin-bottom: 2rem;
                color: var(--text-light);
            }
            .retry-btn {
                background: #e74c3c;
                color: white;
                border: none;
                padding: 12px 24px;
                border-radius: 10px;
                cursor: pointer;
                font-weight: 500;
                transition: var(--transition);
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
            }
            .retry-btn:hover {
                background: #c0392b;
                transform: translateY(-2px);
            }
        `;
        
        if (!document.querySelector('style[data-error-styles]')) {
            style.setAttribute('data-error-styles', 'true');
            document.head.appendChild(style);
        }
    }

    shareResult(city, sunrise, sunset) {
        const shareText = `🌅 Sunrise times for ${city}:\nSunrise: ${sunrise}\nSunset: ${sunset}\n\nGet sunrise times for your city at: ${window.location.href}`;
        
        if (navigator.share) {
            navigator.share({
                title: `Sunrise Times - ${city}`,
                text: shareText,
                url: window.location.href
            }).catch(console.error);
        } else {
            // Fallback: copy to clipboard
            this.copyToClipboard(shareText);
            this.showToast('Share text copied to clipboard!');
        }
    }

    copyResult(city, sunrise, sunset) {
        const copyText = `Sunrise times for ${city}:\nSunrise: ${sunrise}\nSunset: ${sunset}`;
        this.copyToClipboard(copyText);
        this.showToast('Sunrise times copied to clipboard!');
    }

    copyToClipboard(text) {
        if (navigator.clipboard) {
            navigator.clipboard.writeText(text).catch(console.error);
        } else {
            // Fallback for older browsers
            const textArea = document.createElement('textarea');
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
        }
    }

    showToast(message) {
        // Create toast notification
        const toast = document.createElement('div');
        toast.className = 'toast';
        toast.textContent = message;
        
        // Add toast styles
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #2ecc71;
            color: white;
            padding: 12px 20px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        `;
        
        document.body.appendChild(toast);
        
        // Remove toast after 3 seconds
        setTimeout(() => {
            toast.style.animation = 'slideOutRight 0.3s ease-out';
            setTimeout(() => {
                if (toast.parentNode) {
                    toast.parentNode.removeChild(toast);
                }
            }, 300);
        }, 3000);
        
        // Add animation styles
        this.addToastStyles();
    }

    // Dynamic background based on time of day
    initDynamicBackground() {
        this.updateBackgroundByTime();
        // Update every hour
        setInterval(() => this.updateBackgroundByTime(), 3600000);
    }

    updateBackgroundByTime() {
        const hour = new Date().getHours();
        const minute = new Date().getMinutes();
        const totalMinutes = hour * 60 + minute;
        const body = document.body;
        const sun = document.getElementById('dynamicSun');
        
        // Remove existing time classes
        const timeClasses = ['pre-dawn', 'dawn', 'sunrise', 'morning', 'midday', 'afternoon', 'golden-hour', 'sunset', 'twilight', 'dusk', 'night', 'midnight'];
        body.classList.remove(...timeClasses);
        sun?.classList.remove(...timeClasses);
        
        // More precise time periods based on actual sunrise/sunset times
        if (totalMinutes >= 0 && totalMinutes < 300) { // 12:00 AM - 5:00 AM
            body.classList.add('midnight');
            sun?.classList.add('midnight');
        } else if (totalMinutes >= 300 && totalMinutes < 360) { // 5:00 AM - 6:00 AM
            body.classList.add('pre-dawn');
            sun?.classList.add('pre-dawn');
        } else if (totalMinutes >= 360 && totalMinutes < 390) { // 6:00 AM - 6:30 AM
            body.classList.add('dawn');
            sun?.classList.add('dawn');
        } else if (totalMinutes >= 390 && totalMinutes < 450) { // 6:30 AM - 7:30 AM
            body.classList.add('sunrise');
            sun?.classList.add('sunrise');
        } else if (totalMinutes >= 450 && totalMinutes < 600) { // 7:30 AM - 10:00 AM
            body.classList.add('morning');
            sun?.classList.add('morning');
        } else if (totalMinutes >= 600 && totalMinutes < 900) { // 10:00 AM - 3:00 PM
            body.classList.add('midday');
            sun?.classList.add('midday');
        } else if (totalMinutes >= 900 && totalMinutes < 1020) { // 3:00 PM - 5:00 PM
            body.classList.add('afternoon');
            sun?.classList.add('afternoon');
        } else if (totalMinutes >= 1020 && totalMinutes < 1080) { // 5:00 PM - 6:00 PM
            body.classList.add('golden-hour');
            sun?.classList.add('golden-hour');
        } else if (totalMinutes >= 1080 && totalMinutes < 1140) { // 6:00 PM - 7:00 PM
            body.classList.add('sunset');
            sun?.classList.add('sunset');
        } else if (totalMinutes >= 1140 && totalMinutes < 1200) { // 7:00 PM - 8:00 PM
            body.classList.add('twilight');
            sun?.classList.add('twilight');
        } else if (totalMinutes >= 1200 && totalMinutes < 1320) { // 8:00 PM - 10:00 PM
            body.classList.add('dusk');
            sun?.classList.add('dusk');
        } else { // 10:00 PM - 12:00 AM
            body.classList.add('night');
            sun?.classList.add('night');
        }
    }

    // Initialize scroll-triggered animations
    initScrollAnimations() {
        const animationElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .scale-in');
        
        this.animationObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        animationElements.forEach(el => {
            this.animationObserver.observe(el);
        });
    }

    // Initialize particle system
    initParticleSystem() {
        this.createRandomParticles();
        setInterval(() => this.createRandomParticles(), 30000); // Create new particles every 30 seconds
    }

    createRandomParticles() {
        const particlesContainer = document.getElementById('particles');
        if (!particlesContainer) return;

        // Create 5 random particles
        for (let i = 0; i < 5; i++) {
            setTimeout(() => {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.width = (Math.random() * 4 + 2) + 'px';
                particle.style.height = particle.style.width;
                particle.style.animationDuration = (Math.random() * 5 + 5) + 's';
                particle.style.animationDelay = Math.random() * 2 + 's';
                
                particlesContainer.appendChild(particle);
                
                // Remove particle after animation
                setTimeout(() => {
                    if (particle.parentNode) {
                        particle.parentNode.removeChild(particle);
                    }
                }, 10000);
            }, i * 1000);
        }
    }

    // Start dynamic updates
    startDynamicUpdates() {
        // Update sun position based on time
        this.updateSunPosition();
        setInterval(() => this.updateSunPosition(), 60000); // Update every minute
        
        // Add random floating animations to city cards
        this.addFloatingAnimations();
    }

    updateSunPosition() {
        const sun = document.getElementById('dynamicSun');
        if (!sun) return;

        const hour = new Date().getHours();
        const minute = new Date().getMinutes();
        const totalMinutes = hour * 60 + minute;
        
        // Calculate sun position (sunrise at 6:00, sunset at 18:00)
        const dayMinutes = 12 * 60; // 12 hours of daylight
        const sunriseMinutes = 6 * 60; // 6:00 AM
        const sunsetMinutes = 18 * 60; // 6:00 PM
        
        let sunPosition = 0;
        if (totalMinutes >= sunriseMinutes && totalMinutes <= sunsetMinutes) {
            sunPosition = ((totalMinutes - sunriseMinutes) / dayMinutes) * 100;
        } else if (totalMinutes < sunriseMinutes) {
            sunPosition = 0;
        } else {
            sunPosition = 100;
        }
        
        sun.style.left = Math.max(10, Math.min(90, sunPosition)) + '%';
        sun.style.top = (10 + Math.sin((sunPosition / 100) * Math.PI) * 20) + '%';
    }

    addFloatingAnimations() {
        const cityCards = document.querySelectorAll('.city-card, .city-info-card');
        cityCards.forEach((card, index) => {
            const delay = Math.random() * 5;
            const duration = 3 + Math.random() * 2;
            card.style.animation += `, cardFloat ${duration}s ease-in-out ${delay}s infinite`;
        });
        
        // Add keyframe for floating animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes cardFloat {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-3px); }
            }
        `;
        document.head.appendChild(style);
    }

    // Handle window resize
    handleResize() {
        // Recalculate animations for mobile
        this.optimizeForMobile();
    }

    handleVisibilityChange() {
        if (document.hidden) {
            // Pause heavy animations when page is not visible
            document.body.classList.add('paused-animations');
        } else {
            document.body.classList.remove('paused-animations');
        }
    }

    optimizeForMobile() {
        const isMobile = window.innerWidth <= 768;
        const particles = document.querySelectorAll('.particle');
        
        if (isMobile) {
            // Reduce particles on mobile for better performance
            particles.forEach((particle, index) => {
                if (index > 5) {
                    particle.style.display = 'none';
                }
            });
        } else {
            particles.forEach(particle => {
                particle.style.display = 'block';
            });
        }
    }

    // Theme switching functionality
    switchTheme(theme) {
        this.currentTheme = theme;
        const body = document.body;
        const dayBtn = document.getElementById('dayTheme');
        const nightBtn = document.getElementById('nightTheme');
        
        if (theme === 'night') {
            body.classList.add('night-theme');
            dayBtn.classList.remove('active');
            nightBtn.classList.add('active');
        } else {
            body.classList.remove('night-theme');
            nightBtn.classList.remove('active');
            dayBtn.classList.add('active');
        }
        
        // Store preference
        localStorage.setItem('sunriseTheme', theme);
        
        // Update background accordingly
        this.updateBackgroundByTime();
    }

    // Load saved theme
    loadSavedTheme() {
        const savedTheme = localStorage.getItem('sunriseTheme') || 'day';
        this.switchTheme(savedTheme);
    }

    addToastStyles() {
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            @keyframes slideOutRight {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }
        `;
        
        if (!document.querySelector('style[data-toast-styles]')) {
            style.setAttribute('data-toast-styles', 'true');
            document.head.appendChild(style);
        }
    }
}

// Global functions for HTML onclick events
function selectCity(city) {
    const searchInput = document.getElementById('citySearch');
    if (searchInput) {
        searchInput.value = city;
        app.searchSunrise();
    }
}

function searchSunrise() {
    app.searchSunrise();
}

function toggleAllCities() {
    const grid = document.getElementById('allCitiesGrid');
    const toggleText = document.getElementById('toggleText');
    const toggleIcon = document.getElementById('toggleIcon');
    
    if (!grid || !toggleText || !toggleIcon) return;
    
    app.allCitiesVisible = !app.allCitiesVisible;
    
    if (app.allCitiesVisible) {
        grid.style.display = 'grid';
        toggleText.textContent = 'Hide All Cities';
        toggleIcon.className = 'fas fa-chevron-up';
        
        // Animate cards when showing
        const cards = grid.querySelectorAll('.city-info-card');
        cards.forEach((card, index) => {
            setTimeout(() => {
                card.classList.add('animate');
            }, index * 50);
        });
    } else {
        grid.style.display = 'none';
        toggleText.textContent = 'Show All Cities';
        toggleIcon.className = 'fas fa-chevron-down';
    }
}

function switchTheme(theme) {
    app.switchTheme(theme);
}

// Initialize the app when DOM is loaded
let app;
document.addEventListener('DOMContentLoaded', () => {
    app = new SunriseApp();
    
    // Load saved theme
    app.loadSavedTheme();
    
    // Add initial animations
    setTimeout(() => {
        document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .scale-in').forEach((el, index) => {
            setTimeout(() => {
                el.classList.add('animate');
            }, index * 100);
        });
    }, 500);
});

// Handle browser back/forward
window.addEventListener('popstate', () => {
    // Reset search if needed
    const resultsSection = document.getElementById('resultsSection');
    if (resultsSection) {
        resultsSection.style.display = 'none';
    }
});

// Add performance monitoring
window.addEventListener('load', () => {
    // Check if device supports advanced animations
    const supportsAdvancedAnimations = !window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    
    if (!supportsAdvancedAnimations) {
        document.body.classList.add('reduced-motion');
    }
    
    // Optimize for mobile
    app.optimizeForMobile();
});

// Add touch support for mobile devices
document.addEventListener('touchstart', function() {
    // Enable touch-specific optimizations
    document.body.classList.add('touch-device');
}, { passive: true });