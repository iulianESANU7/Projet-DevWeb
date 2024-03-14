<?php

function nasaAPOD() {
    
    $r = "\t<article class=\"nasaapod\">\n";
    $r .= "\t\t<h2>Nasa API</h2>\n";
    $r .= "\t\t<figure>\n";

    $api_url = 'https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=' . date('Y-m-d');
    $response = file_get_contents($api_url);
    $data = json_decode($response, true);

    if ($data['media_type'] == 'image') {
        $r .= "\t\t\t<img src=\"" . $data['hdurl'] . "\" alt=\"" . $data['copyright'] . "\"/>\n";
        $r .= "\t\t\t<figcaption>" . $data['copyright'] . "</figcaption>\n";
        $r .= "\t\t\t<p>" . $data['explanation'] . "</p>\n";
    }

    
    
    return $r . "\t\t</figure>\n\t</article>\n";
}
