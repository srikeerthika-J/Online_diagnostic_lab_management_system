<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lab_project";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$googleApiKey = "AIzaSyAXMpcrSourHY8pFYHQ0tt-iMaPMYk2Pb0";
$pincode = $_GET['pincode'] ?? '600001'; // Default pincode

// 1. Convert Pincode to Latitude & Longitude
$geoUrl = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($pincode) . "&key=" . $googleApiKey;
$geoResponse = json_decode(file_get_contents($geoUrl), true);

if (!empty($geoResponse['results'])) {
    $location = $geoResponse['results'][0]['geometry']['location'];
    $latitude = $location['lat'];
    $longitude = $location['lng'];

    // 2. Fetch Labs using Google Places API (Hospitals, Diagnostic Centers)
    $radius = 10000; // 10 km
    $type = "hospital"; // Change to 'diagnostic_center' if needed
    $placesUrl = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$latitude,$longitude&radius=$radius&type=$type&key=$googleApiKey";

    $placesResponse = json_decode(file_get_contents($placesUrl), true);

    if (!empty($placesResponse['results'])) {
        $count = 0;

        foreach ($placesResponse['results'] as $place) {
            if ($count >= 10) break; // Limit to 10 labs

            $labName = $conn->real_escape_string($place['name']);
            $address = $conn->real_escape_string($place['vicinity']);
            $placeId = $conn->real_escape_string($place['place_id']);
            $lat = $place['geometry']['location']['lat'];
            $lng = $place['geometry']['location']['lng'];

            // Insert into MySQL if not already present
            $checkSql = "SELECT id FROM labs WHERE google_place_id='$placeId'";
            $checkResult = $conn->query($checkSql);

            if ($checkResult->num_rows == 0) {
                $insertSql = "INSERT INTO labs (lab_name, address, pincode, latitude, longitude, google_place_id) 
                              VALUES ('$labName', '$address', '$pincode', '$lat', '$lng', '$placeId')";
                $conn->query($insertSql);
            }

            $count++;
        }

        echo "Labs successfully stored in the database!";
    } else {
        echo "No labs found for this pincode.";
    }
} else {
    echo "Invalid pincode.";
}

$conn->close();
