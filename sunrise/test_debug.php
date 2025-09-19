<?php
require_once 'sunrise_calculator.php';

echo "Testing Sunrise Calculator Data\n";
echo "================================\n\n";

// Test with today's date
$today = date('Y-m-d');
echo "Testing date: $today\n\n";

// Test a few popular cities
$testCities = ['Mumbai', 'Delhi', 'Bangalore', 'Chennai', 'Kolkata'];

foreach ($testCities as $city) {
    echo "Testing city: $city\n";
    $result = SunriseCalculator::getSunriseTime($city);
    
    if ($result) {
        echo "  Sunrise: " . $result['sunrise'] . "\n";
        echo "  Sunset: " . $result['sunset'] . "\n";
        echo "  Date: " . $result['date'] . "\n";
        echo "  Coordinates: " . $result['coordinates']['lat'] . ", " . $result['coordinates']['lng'] . "\n";
    } else {
        echo "  ERROR: Could not calculate sunrise time\n";
    }
    echo "\n";
}

// Test date_sun_info function directly
echo "Testing PHP date_sun_info function:\n";
$timestamp = strtotime('2025-09-19');
$lat = 19.0760; // Mumbai
$lng = 72.8777;

$sun_info = date_sun_info($timestamp, $lat, $lng);
if ($sun_info) {
    echo "Raw sun_info data for Mumbai:\n";
    foreach ($sun_info as $key => $value) {
        if (is_numeric($value)) {
            echo "  $key: " . date('Y-m-d H:i:s', $value) . " (" . date('g:i A', $value) . ")\n";
        } else {
            echo "  $key: $value\n";
        }
    }
} else {
    echo "ERROR: date_sun_info returned false\n";
}

// Check timezone
echo "\nTimezone info:\n";
echo "Default timezone: " . date_default_timezone_get() . "\n";
echo "Current time: " . date('Y-m-d H:i:s') . "\n";
?>