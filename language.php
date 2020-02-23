<?php
    $apiKey = 'AIzaSyB0IUJPQjpZ5ap3ZXljUwaIyo5r1iCe8X0>';
    $url = 'https://www.googleapis.com/language/translate/v2/languages?key=' . $apiKey;

    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);     //We want the result to be saved into variable, not printed out
    $response = curl_exec($handle);                         
    curl_close($handle);

    print_r(json_decode($response, true));
?>