/*  
CIS131 Group Weather API Assignment
Rose Haney, Chris Gillispie
*/

// confirmed file is loaded
//console.log('Worked');
var weatherReport;
var httpRequest = new XMLHttpRequest();

function getWeather() {
   //console.log("Got here");
   httpRequest.open("get","getJSON.php");
   httpRequest.send(null);
   httpRequest.onreadystatechange = aFunction;

}

function aFunction() {
  if (httpRequest.readyState == 4 && httpRequest.status == 200)
  {
    var weatherReport = httpRequest.responseText;
    console.log(weatherReport);
    var jsObject = JSON.parse(weatherReport);
    console.log(jsObject.currently.apparentTemperature);
    document.getElementById("humiditySpan").innerHTML = jsObject.currently.humidity;
    document.getElementById("temperatureSpan").innerHTML = jsObject.currently.temperature;
    document.getElementById("summarySpan").innerHTML = jsObject.currently.summary;
  }
}
getWeather();