// Sunrise Times JavaScript - Interactive functionality

class SunriseApp {
    constructor() {
        this.cities = [];
        this.allCitiesVisible = false;
        this.init();
    }

    async init() {
        this.setupEventListeners();
        await this.loadCities();
        this.setupAutoComplete();
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
    } else {
        grid.style.display = 'none';
        toggleText.textContent = 'Show All Cities';
        toggleIcon.className = 'fas fa-chevron-down';
    }
}

// Initialize the app when DOM is loaded
let app;
document.addEventListener('DOMContentLoaded', () => {
    app = new SunriseApp();
});

// Handle browser back/forward
window.addEventListener('popstate', () => {
    // Reset search if needed
    const resultsSection = document.getElementById('resultsSection');
    if (resultsSection) {
        resultsSection.style.display = 'none';
    }
});