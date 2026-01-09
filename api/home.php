<?php

header("Content-Type: application/json");

// Load home data
$homeData = require __DIR__ . '/../data/home_data.php';

$responseData = [];

// Location
if (!empty($homeData['location']['enabled'])) {
    $responseData['location'] = $homeData['location']['data'];
}

// Categories
if (!empty($homeData['categories']['enabled'])) {
    $responseData['categories'] = $homeData['categories']['data'];
}

// Banners
if (!empty($homeData['banners']['enabled'])) {
    $responseData['banners'] = $homeData['banners']['data'];
}

// Services
if (!empty($homeData['services']['enabled'])) {
    $responseData['services'] = $homeData['services']['data'];
}

// Final response
$response = [
    "status" => true,
    "data" => $responseData,
    "message" => ""
];

echo json_encode($response, JSON_PRETTY_PRINT);
