<?php
/**
 * API endpoint for Sunrise Calculator
 * Handles AJAX requests for sunrise/sunset data
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

require_once 'sunrise_calculator.php';

function sendResponse($success, $data = null, $message = '') {
    echo json_encode([
        'success' => $success,
        'data' => $data,
        'message' => $message
    ]);
    exit();
}

function handleGetRequest() {
    $action = $_GET['action'] ?? '';
    
    switch ($action) {
        case 'getCities':
            $cities = SunriseCalculator::getCities();
            sendResponse(true, $cities);
            break;
            
        case 'getAllSunriseTimes':
            $date = $_GET['date'] ?? null;
            $sunriseTimes = SunriseCalculator::getAllSunriseTimes($date);
            sendResponse(true, $sunriseTimes);
            break;
            
        case 'searchCities':
            $query = $_GET['query'] ?? '';
            if (empty($query)) {
                sendResponse(false, null, 'Query parameter is required');
            }
            $cities = SunriseCalculator::searchCities($query);
            sendResponse(true, $cities);
            break;
            
        default:
            sendResponse(false, null, 'Invalid action');
    }
}

function handlePostRequest() {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!$input) {
        sendResponse(false, null, 'Invalid JSON data');
    }
    
    $action = $input['action'] ?? '';
    
    switch ($action) {
        case 'getSunriseTime':
            $city = $input['city'] ?? '';
            $date = $input['date'] ?? null;
            
            if (empty($city)) {
                sendResponse(false, null, 'City parameter is required');
            }
            
            // Try to find exact match first
            $sunriseData = SunriseCalculator::getSunriseTime($city, $date);
            
            if (!$sunriseData) {
                // Try searching for similar cities
                $searchResults = SunriseCalculator::searchCities($city);
                
                if (!empty($searchResults)) {
                    // Use the first match
                    $sunriseData = SunriseCalculator::getSunriseTime($searchResults[0], $date);
                    
                    if ($sunriseData) {
                        sendResponse(true, $sunriseData, "Found closest match: {$searchResults[0]}");
                    }
                }
                
                sendResponse(false, null, 'City not found. Please check the spelling or try another city.');
            }
            
            sendResponse(true, $sunriseData);
            break;
            
        case 'getMultipleSunriseTimes':
            $cities = $input['cities'] ?? [];
            $date = $input['date'] ?? null;
            
            if (empty($cities) || !is_array($cities)) {
                sendResponse(false, null, 'Cities array is required');
            }
            
            $sunriseTimes = SunriseCalculator::getMultipleSunriseTimes($cities, $date);
            sendResponse(true, $sunriseTimes);
            break;
            
        default:
            sendResponse(false, null, 'Invalid action');
    }
}

// Route the request based on method
try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        handleGetRequest();
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        handlePostRequest();
    } else {
        sendResponse(false, null, 'Method not allowed');
    }
} catch (Exception $e) {
    error_log('Sunrise API Error: ' . $e->getMessage());
    sendResponse(false, null, 'An error occurred while processing your request');
}
?>