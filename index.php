<?php
// Text to be detected
$text = (isset($_GET['q']) && $_GET['q']) ? $_GET['q'] : 'Hello, how are you?';

// API key for Detect Language API
$apiKey = ""; // Add your API key here

// Endpoint URL
$url = "https://ws.detectlanguage.com/0.2/detect";

// Request headers
$headers = array(
    "Content-Type: application/x-www-form-urlencoded",
    "Authorization: Bearer ".$apiKey
);

// Request payload
$data = array(
    "q" => $text
);

// Initialize cURL session
$curl = curl_init();

// Set cURL options
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));

// Execute cURL request
$response = curl_exec($curl);

// Check for errors
if ($response === false) {
    die("Error: " . curl_error($curl));
}

// Decode the response JSON
$result = json_decode($response, true);

// Get the detected language
$language = $result['data']['detections'][0]['language'];

// Check if the response was successful
if ($result && isset($language)) {
    echo "Detected language: " . $language;
} else {
    echo "Failed to detect language.";
}

// Close cURL session
curl_close($curl);
?>
