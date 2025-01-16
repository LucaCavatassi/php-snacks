<!-- Speed is a crucial measure of success for any aspiring warrior, so let's write a function to calculate it.

Average Speed is calculated by dividing distance by time. Given two strings as input the first of which indicates a codewarrior's distance travelled (in metres or kilometres) and the second indicating the time it takes them to travel (in seconds or minutes), return a string indicating their speed in miles per hour rounded to the nearest integer.

For the purposes of this kata one metre per second is defined as 2.23694 miles per hour.

So for example given the input values of distance & time "3km" and "5min" we should return a speed value of "22mph". -->

<?php
function calculate_speed($distance, $time) {
    // Vars for stocking meters and seconds
    $meters = 0;
    $seconds = 0;

    // Check if strings includes km o m
    if (str_contains($distance, 'km')) {
        // If included distance must be multiplied to 100 have meters
        $meters = (int)$distance * 1000;
    } else if (str_contains($distance, 'm')) {
        // else just the int of provided string 
        $meters = (int)$distance;
    }

    // Check if strings includes min o sec
    if (str_contains($time, 'min')) {
        // If included distance must be multiplied to 60 have seconds
        $seconds = (int)$time * 60;
    } else if (str_contains($time, 's')) {
        // else just the int of provided string 
        $seconds = (int)$time;
    }

    $speed_mps = $meters / $seconds;
    $speed_mph = round($speed_mps * 2.23694) . 'mph';

    return $speed_mph;
};

calculate_speed('3km', '5min');