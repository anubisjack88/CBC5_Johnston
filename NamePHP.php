
<?php
function firstlastname($Gemar, $Johnston) {
    print_r("$Gemar. $Johnston <br>");
// function_exists (addcslashes + abstract)
}
$gemar = "This year";

firstlastname($gemar,"year");
firstlastname("Johnston", "end");
?>

<?php
function sum ($g, $j) {
    $b = $g + $j;
   
    return $b;
}
echo "10 + 20 Look ma no hands! = " . sum(10, 20) . "<br>";
echo "25 + 5 .... =" . sum(25, 5) . "<br>";
?>

<?php
$age = ["John"=>"42", "Jack"=>"32"];
function outputAge($name){
return $age[$name];+
}
echo "John is " . $age[' John '] . " years " . 'old';
echo "Jack is" . $age[' Jack'] . " years " . 'old';
echo "Jack is ". outputAge("Jack"). "years old";
echo "John is ". outputAge("John"). "years old";

function flowerFinder ($flower $penny = {"stalk" => 1, "petal"=>10,
"leaves"} =>5];)
return $type[$flower]; 

function flowerFinder global $type;
return $type[$flower]; }