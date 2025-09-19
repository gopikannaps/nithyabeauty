# Sunrise Times in India 🌅

A modern, responsive web application that provides accurate sunrise and sunset times for major Indian cities.

## Features

### 🌟 **Modern Design**
- Beautiful gradient backgrounds with animated elements
- Responsive design that works on all devices
- Smooth animations and transitions
- Glass morphism effects with backdrop blur

### 🔍 **Smart Search**
- Real-time city search with autocomplete
- 50+ major Indian cities included
- Fuzzy search that finds closest matches
- Date selection for any day

### 📱 **Mobile-Friendly**
- Fully responsive design
- Touch-friendly interface
- Optimized for mobile screens
- Fast loading times

### 🚀 **Interactive Features**
- Quick access to popular cities
- One-click city selection
- Share and copy functionality
- Smooth scrolling and animations

## File Structure

```
sunrise/
├── index.php              # Main page with HTML structure
├── sunrise_calculator.php # PHP class for sunrise calculations
├── api.php                # API endpoint for AJAX requests
├── css/
│   └── style.css         # Modern CSS with animations
└── js/
    └── script.js         # Interactive JavaScript functionality
```

## How to Use

1. **Access the Application**
   - Navigate to `http://localhost/nithyabeauty/sunrise/` in your browser
   - Make sure XAMPP is running with Apache and PHP enabled

2. **Search for Cities**
   - Type any Indian city name in the search box
   - Use the autocomplete suggestions
   - Select a date (defaults to today)
   - Click "Get Sunrise Time" or press Enter

3. **Quick Access**
   - Click on any of the popular city cards for instant results
   - View all cities by clicking "Show All Cities"

4. **Share Results**
   - Use the Share button to share via native sharing
   - Copy button to copy times to clipboard
   - Results show both sunrise and sunset times

## Technical Features

### 🔧 **Backend (PHP)**
- Uses PHP's `date_sun_info()` function for accurate calculations
- Object-oriented design with SunriseCalculator class
- RESTful API with JSON responses
- Error handling and validation

### 🎨 **Frontend (HTML/CSS/JS)**
- Modern CSS with custom properties (CSS variables)
- CSS Grid and Flexbox for layouts
- CSS animations and keyframes
- ES6 JavaScript with async/await
- Fetch API for AJAX requests

### 📐 **Calculations**
- Astronomical calculations based on latitude/longitude
- Accurate coordinates for 50+ Indian cities
- Timezone handling (IST - Asia/Kolkata)
- Date-specific calculations

## City Coverage

The application includes 50+ major Indian cities including:
- **Metro Cities**: Mumbai, Delhi, Bangalore, Chennai, Kolkata, Hyderabad
- **Major Cities**: Pune, Ahmedabad, Jaipur, Surat, Lucknow, Kanpur
- **Regional Centers**: Guwahati, Chandigarh, Bhopal, Indore, Coimbatore
- **And many more...**

## Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers

## API Endpoints

### GET Requests
- `api.php?action=getCities` - Get all available cities
- `api.php?action=getAllSunriseTimes&date=YYYY-MM-DD` - Get all cities' times
- `api.php?action=searchCities&query=city` - Search for cities

### POST Requests
- `{"action": "getSunriseTime", "city": "Mumbai", "date": "2025-09-18"}` - Get specific city time

## Customization

### Adding New Cities
Edit `sunrise_calculator.php` and add to the `$cities` array:
```php
'CityName' => ['lat' => latitude, 'lng' => longitude, 'timezone' => 'Asia/Kolkata'],
```

### Styling Changes
Modify CSS variables in `css/style.css`:
```css
:root {
    --primary-color: #your-color;
    --secondary-color: #your-color;
    /* ... other variables */
}
```

## Requirements

- PHP 7.0 or higher
- Apache web server (XAMPP)
- Modern web browser
- No additional PHP extensions required

## Performance

- ⚡ Fast loading times
- 📱 Mobile optimized
- 🔄 Efficient caching
- 📊 Minimal server load

Enjoy exploring sunrise times across India! 🇮🇳