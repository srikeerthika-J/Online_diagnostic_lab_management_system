<?php
header('Content-Type: application/json');

$googleApiKey = "AIzaSyAXMpcrSourHY8pFYHQ0tt-iMaPMYk2Pb0"; // Replace with your API Key
$pincode = $_GET['pincode'] ?? '';

if (!$pincode || !preg_match('/^\d{6}$/', $pincode)) {
    echo json_encode(["status" => "ERROR", "message" => "Invalid pincode."]);
    exit;
}

// Step 1: Convert Pincode to Latitude & Longitude
$geoUrl = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($pincode) . "&key=" . $googleApiKey;
$geoResponse = json_decode(file_get_contents($geoUrl), true);

if (empty($geoResponse['results'])) {
    echo json_encode(["status" => "ERROR", "message" => "Invalid pincode."]);
    exit;
}

$location = $geoResponse['results'][0]['geometry']['location'];
$latitude = $location['lat'];
$longitude = $location['lng'];

// Step 2: Fetch Nearby Labs (Hospitals, Diagnostic Centers)
$radius = 10000; // 10 km

$type = "hospital|clinic|laboratory|diagnostic_center"; // General type for medical facilities
$keyword = "diagnostic center|blood test|blood testing|labs|scans"; // Add the relevant keywords here
$placesUrl = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$latitude,$longitude&radius=$radius&type=$type&keyword=" . urlencode($keyword) . "&key=$googleApiKey";

$placesResponse = json_decode(file_get_contents($placesUrl), true);

$labs = [];
if (!empty($placesResponse['results'])) {
    foreach ($placesResponse['results'] as $place) {
        $labs[] = [
            "name" => $place['name'],
            "place_id" => $place['place_id']
        ];
    }
    echo json_encode(["status" => "OK", "labs" => $labs]);
} else {
    echo json_encode(["status" => "ERROR", "message" => "No labs found."]);
}
