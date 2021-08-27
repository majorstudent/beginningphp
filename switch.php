<?php

$fav_car = "Nissan";

switch ($fav_car){
    case "Nissan":
        echo "<h2>I love Nissan</h2>";
        break;
    case "Toyota":
        echo "Toyota is a good brand";
        break;
    case "Volkswagen":
        echo "<strong>Golf GTI is the best hot hatch out here.</strong>";
        break;
    case "Mercedes":
        echo "You should definitely get a Mercedes AMG 180";
        break;
    default:
        echo "It is not in this list";
        break;
}

