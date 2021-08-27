<?php
$num = 15;
while ($num <= 20){
    echo "The number is  $num <br>";
    $num++;
}

echo "<hr>";

//do .. while
$num1 = 5;
do {
    echo $num1 . "<br>";
    $num1++;
} while($num1 <= 10);

echo "<hr>";

for($num3 = 3; $num3 <= 11; $num3 += 2){
    echo "This is the loop $num3 <br>";
}
