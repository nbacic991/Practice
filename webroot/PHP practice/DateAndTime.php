<?php
/**
 * Created by PhpStorm.
 * User: nemus
 * Date: 1/22/18
 * Time: 1:55 PM
 */
/**
 * Format: date(format,timestamp);
 * Simple way to print todays date.
 */

/**
 * d - Days in numbers from 01-31
 * D - Days as text - Monday to Sunday
 * m - Months in numbers from 1 - 12
 * M - Month as text - January ...
 * y - Two digits year stamp, like 08
 * Y - Full year, like 2018
 */
$today = date("d/m/Y");

echo $today . '<hr>';


echo date("d/m/Y") ."<br>";
echo date("d-m-Y") ."<br>";
echo date("d.m.Y") ."<hr>";



/**
 * Time format:
 * h - 12h hour format
 * H - 24 hour format
 * i - Minutes
 * s - Seconds
 * a - am/pm with small letters
 * A - AM/PM with big letters
 */

echo date("H:i:s") ."<br>";
echo date("F d, Y h:i:s A") ."<br>";
echo date('h:i a') ."<br>";