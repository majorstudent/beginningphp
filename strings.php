<?php
$new_string = "The quick brown fox jumps over a lazy dog";
echo $new_string;
$lower = strtolower($new_string);
echo $lower . "<br>";
$upper = strtoupper($lower);
echo $upper . "<br>";
$length = strlen($lower);
echo $length . "<br>";

$arr_one = explode(' ', $lower);
var_dump($arr_one);
echo $arr_one;
echo "<br>";
foreach($arr_one as $every){
    echo $every . "<br>";
}
echo "<br>";

$i = 0;

$the = strlen($arr_one[0]);
echo $the;
echo "<br>";
echo "<hr>";

foreach ($arr_one as $every){
    echo $every . "<br>";
}

echo "<br>";
echo "<hr>";
$min =  '                                                        ';

foreach($arr_one as $every){
    if(strlen($every) < strlen($min)){
        $min = $every;
    }
}

echo $min;

echo "<hr>";

//$new_arr = explode(' ', $new_string);
//var_dump($new_arr);

$string_two = "abbcccde";
$word = str_split($string_two, 1);
var_dump($word);
echo "<br>";
$a = 0;

//foreach($word as $letter){
//    echo $letter;
//    echo $word[$a] . "<br>";
//    $a++;
//}

foreach($word as $letter){
    if($letter != $word[$a+1]){
        $capital = strtoupper($letter);
    } else {

    }
    $a++;
}

//function accum($s){
//
//}
