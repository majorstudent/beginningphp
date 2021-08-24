<?php
echo "This is a string";
echo "<br>";
echo "567766";
echo "<br>";

//global variables ... can be accessed anywhere.

$school = "Emobilis Mobile Technology Institute";
$year = "2021";
$boolean = true;
var_dump($school); //var_dump is a pre-defined function that does particular functions.
echo "<br>";
var_dump($year);
echo "<br>";
var_dump($boolean);
echo "<br>";
echo "<br>";
var_dump(is_string($school));
echo "<br>";
echo "<br>";
str_split($school);
var_dump(is_array($school));