<?php

  $city = $_GET["city"];

  $city = str_replace(" ", "", $city); //remove spaces for forecast website

  $contents = file_get_contents("http://www.weather-forecast.com/locations/{$city}/forecasts/latest");
  
  preg_match('/3 Day Weather Forecast Summary:<\/b>' 
             . '<span class="read-more-small"><span class="read-more-content"> '
             . '<span class="phrase">(.*?)<\/span>/s', $contents, $matches);

  if ($matches[1] !== "") {
    echo $matches[1]; 
  }
  else {
    echo "Invalid city";
  }

?>