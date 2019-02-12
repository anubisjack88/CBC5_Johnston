<?php

$g = 3;
$j = array("First" . "Array" . "V" . "Viking" . "Assgard");
array_push($j, "1");
array('1' =>
'g');
echo count($j);
var_dump ($j);

if ($j < "1"){
    echo "First";

} else {
    echo "Last";
}

if ($j > "5") {
    echo "Viking1";

} elseif ($j < "4"){
    echo "BattleStar";

} else {
    echo "Big 0";
}


$NX01 = 'My test flight';
echo strlen($NX01);

echo substr_count($NX01, 'test');

$h = array_fill_keys($j, 'NX02');
print_r($h);

switch ($j) {
    case 0:
    echo "j equals 0";
    break;
    
    case 1: 
    echo "j equals 1";
    break;
    
    case 2: 
    echo "j equals 2";
    break; 
}
    $i = 3;
    do {
        echo "This is a number: $i <br>";
        $i++;
    } while ($i <=5);

    

    
?>