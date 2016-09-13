<?php

$city = $_GET['city'];

//str_replace(search, replace, subject)
$city=str_replace(" ", "", $city);


$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");


//regex in PHP
preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);

print_r($matches[1]); //[1] specifies which of data in the array I want, hence in this case we can the second data in the array.


 ?>

