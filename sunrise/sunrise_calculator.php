<?php
/**
 * Sunrise Calculator for Indian Cities
 * Calculates sunrise and sunset times for major Indian cities
 */

class SunriseCalculator {
    
    // Major Indian cities with their coordinates
    private static $cities = [
        'Mumbai' => ['lat' => 19.0760, 'lng' => 72.8777, 'timezone' => 'Asia/Kolkata'],
        'Delhi' => ['lat' => 28.7041, 'lng' => 77.1025, 'timezone' => 'Asia/Kolkata'],
        'Bangalore' => ['lat' => 12.9716, 'lng' => 77.5946, 'timezone' => 'Asia/Kolkata'],
        'Hyderabad' => ['lat' => 17.3850, 'lng' => 78.4867, 'timezone' => 'Asia/Kolkata'],
        'Chennai' => ['lat' => 13.0827, 'lng' => 80.2707, 'timezone' => 'Asia/Kolkata'],
        'Kolkata' => ['lat' => 22.5726, 'lng' => 88.3639, 'timezone' => 'Asia/Kolkata'],
        'Pune' => ['lat' => 18.5204, 'lng' => 73.8567, 'timezone' => 'Asia/Kolkata'],
        'Ahmedabad' => ['lat' => 23.0225, 'lng' => 72.5714, 'timezone' => 'Asia/Kolkata'],
        'Jaipur' => ['lat' => 26.9124, 'lng' => 75.7873, 'timezone' => 'Asia/Kolkata'],
        'Surat' => ['lat' => 21.1702, 'lng' => 72.8311, 'timezone' => 'Asia/Kolkata'],
        'Lucknow' => ['lat' => 26.8467, 'lng' => 80.9462, 'timezone' => 'Asia/Kolkata'],
        'Kanpur' => ['lat' => 26.4499, 'lng' => 80.3319, 'timezone' => 'Asia/Kolkata'],
        'Nagpur' => ['lat' => 21.1458, 'lng' => 79.0882, 'timezone' => 'Asia/Kolkata'],
        'Indore' => ['lat' => 22.7196, 'lng' => 75.8577, 'timezone' => 'Asia/Kolkata'],
        'Thane' => ['lat' => 19.2183, 'lng' => 72.9781, 'timezone' => 'Asia/Kolkata'],
        'Bhopal' => ['lat' => 23.2599, 'lng' => 77.4126, 'timezone' => 'Asia/Kolkata'],
        'Visakhapatnam' => ['lat' => 17.6868, 'lng' => 83.2185, 'timezone' => 'Asia/Kolkata'],
        'Pimpri-Chinchwad' => ['lat' => 18.6298, 'lng' => 73.7997, 'timezone' => 'Asia/Kolkata'],
        'Patna' => ['lat' => 25.5941, 'lng' => 85.1376, 'timezone' => 'Asia/Kolkata'],
        'Vadodara' => ['lat' => 22.3072, 'lng' => 73.1812, 'timezone' => 'Asia/Kolkata'],
        'Ghaziabad' => ['lat' => 28.6692, 'lng' => 77.4538, 'timezone' => 'Asia/Kolkata'],
        'Ludhiana' => ['lat' => 30.9010, 'lng' => 75.8573, 'timezone' => 'Asia/Kolkata'],
        'Agra' => ['lat' => 27.1767, 'lng' => 78.0081, 'timezone' => 'Asia/Kolkata'],
        'Nashik' => ['lat' => 19.9975, 'lng' => 73.7898, 'timezone' => 'Asia/Kolkata'],
        'Faridabad' => ['lat' => 28.4089, 'lng' => 77.3178, 'timezone' => 'Asia/Kolkata'],
        'Meerut' => ['lat' => 28.9845, 'lng' => 77.7064, 'timezone' => 'Asia/Kolkata'],
        'Rajkot' => ['lat' => 22.3039, 'lng' => 70.8022, 'timezone' => 'Asia/Kolkata'],
        'Kalyan-Dombivali' => ['lat' => 19.2403, 'lng' => 73.1305, 'timezone' => 'Asia/Kolkata'],
        'Vasai-Virar' => ['lat' => 19.4914, 'lng' => 72.8056, 'timezone' => 'Asia/Kolkata'],
        'Varanasi' => ['lat' => 25.3176, 'lng' => 82.9739, 'timezone' => 'Asia/Kolkata'],
        'Srinagar' => ['lat' => 34.0837, 'lng' => 74.7973, 'timezone' => 'Asia/Kolkata'],
        'Aurangabad' => ['lat' => 19.8762, 'lng' => 75.3433, 'timezone' => 'Asia/Kolkata'],
        'Dhanbad' => ['lat' => 23.7957, 'lng' => 86.4304, 'timezone' => 'Asia/Kolkata'],
        'Amritsar' => ['lat' => 31.6340, 'lng' => 74.8723, 'timezone' => 'Asia/Kolkata'],
        'Navi Mumbai' => ['lat' => 19.0330, 'lng' => 73.0297, 'timezone' => 'Asia/Kolkata'],
        'Allahabad' => ['lat' => 25.4358, 'lng' => 81.8463, 'timezone' => 'Asia/Kolkata'],
        'Ranchi' => ['lat' => 23.3441, 'lng' => 85.3096, 'timezone' => 'Asia/Kolkata'],
        'Howrah' => ['lat' => 22.5958, 'lng' => 88.2636, 'timezone' => 'Asia/Kolkata'],
        'Coimbatore' => ['lat' => 11.0168, 'lng' => 76.9558, 'timezone' => 'Asia/Kolkata'],
        'Jabalpur' => ['lat' => 23.1815, 'lng' => 79.9864, 'timezone' => 'Asia/Kolkata'],
        'Gwalior' => ['lat' => 26.2183, 'lng' => 78.1828, 'timezone' => 'Asia/Kolkata'],
        'Vijayawada' => ['lat' => 16.5062, 'lng' => 80.6480, 'timezone' => 'Asia/Kolkata'],
        'Jodhpur' => ['lat' => 26.2389, 'lng' => 73.0243, 'timezone' => 'Asia/Kolkata'],
        'Madurai' => ['lat' => 9.9252, 'lng' => 78.1198, 'timezone' => 'Asia/Kolkata'],
        'Raipur' => ['lat' => 21.2514, 'lng' => 81.6296, 'timezone' => 'Asia/Kolkata'],
        'Kota' => ['lat' => 25.2138, 'lng' => 75.8648, 'timezone' => 'Asia/Kolkata'],
        'Guwahati' => ['lat' => 26.1445, 'lng' => 91.7362, 'timezone' => 'Asia/Kolkata'],
        'Chandigarh' => ['lat' => 30.7333, 'lng' => 76.7794, 'timezone' => 'Asia/Kolkata'],
        'Solapur' => ['lat' => 17.6599, 'lng' => 75.9064, 'timezone' => 'Asia/Kolkata'],
        'Hubli–Dharwad' => ['lat' => 15.3647, 'lng' => 75.1240, 'timezone' => 'Asia/Kolkata'],
        'Tiruchirappalli' => ['lat' => 10.7905, 'lng' => 78.7047, 'timezone' => 'Asia/Kolkata'],
        'Bareilly' => ['lat' => 28.3670, 'lng' => 79.4304, 'timezone' => 'Asia/Kolkata'],
        'Mysore' => ['lat' => 12.2958, 'lng' => 76.6394, 'timezone' => 'Asia/Kolkata']
    ];

    /**
     * Get all available cities
     */
    public static function getCities() {
        return array_keys(self::$cities);
    }

    /**
     * Calculate sunrise time for a specific city
     */
    public static function getSunriseTime($city, $date = null) {
        if (!isset(self::$cities[$city])) {
            return false;
        }

        if ($date === null) {
            $date = date('Y-m-d');
        }

        $coords = self::$cities[$city];
        $timestamp = strtotime($date);
        
        // Calculate sunrise using PHP's date_sun_info function (returns UTC timestamps)
        $sun_info = date_sun_info($timestamp, $coords['lat'], $coords['lng']);
        
        if ($sun_info && isset($sun_info['sunrise']) && isset($sun_info['sunset'])) {
            // Convert UTC timestamps to IST
            $timezone = new DateTimeZone('Asia/Kolkata');
            
            $sunrise_dt = new DateTime('@' . $sun_info['sunrise']);
            $sunrise_dt->setTimezone($timezone);
            $sunrise_time = $sunrise_dt->format('g:i A');
            
            $sunset_dt = new DateTime('@' . $sun_info['sunset']);
            $sunset_dt->setTimezone($timezone);
            $sunset_time = $sunset_dt->format('g:i A');
            
            return [
                'sunrise' => $sunrise_time,
                'sunset' => $sunset_time,
                'city' => $city,
                'date' => date('F j, Y', $timestamp),
                'coordinates' => $coords
            ];
        }
        
        return false;
    }

    /**
     * Get sunrise times for all cities
     */
    public static function getAllSunriseTimes($date = null) {
        $results = [];
        foreach (self::getCities() as $city) {
            $result = self::getSunriseTime($city, $date);
            if ($result) {
                $results[] = $result;
            }
        }
        return $results;
    }

    /**
     * Get sunrise times for multiple cities
     */
    public static function getMultipleSunriseTimes($cities, $date = null) {
        $results = [];
        foreach ($cities as $city) {
            $result = self::getSunriseTime($city, $date);
            if ($result) {
                $results[] = $result;
            }
        }
        return $results;
    }

    /**
     * Search cities by name (partial match)
     */
    public static function searchCities($query) {
        $cities = self::getCities();
        $matches = [];
        
        foreach ($cities as $city) {
            if (stripos($city, $query) !== false) {
                $matches[] = $city;
            }
        }
        
        return $matches;
    }
}
?>