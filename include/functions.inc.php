<?php

function getFigcaptionFromNasaAPI() {
    $url = "https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=2024-02-23";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    $figcaption = $data['explanation'];
    return $figcaption;
}
