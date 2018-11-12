<?php
$WeatherSource = "https://api.darksky.net/forecast/4cfc843429d7e1c530baaccdcec3e23d/37.8267,-122.4233";
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>