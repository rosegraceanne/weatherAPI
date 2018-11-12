<!DOCTYPE html>
<? 
$url = "https://api.darksky.net/forecast/4cfc843429d7e1c530baaccdcec3e23d/37.8267,-122.4233";
$getweather = simplexml_load_file($url);
$gethumidity = $getweather->list->item->humidity['value'];
$gettemp = $getweather->list->item->temperature['value'];
?>


<html lang = "en">
    <head>
        <meta charset="utf-8"/>
        <title>Next 5 Launches</title>
        <link rel ="stylesheet" href="main.css"/>
    </head>
      
    <body>
        <heading>Weather</heading>

        <script>
            console.log($gethumidity');
        </script>

        <ul>
            
            <li>Humidity: <? echo($gethumidity); ?>%</li>
            <li>Temperature: <? echo($gettemp); ?> &deg;F</li>

        </ul>
    </body>
</html>