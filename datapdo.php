<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM myemployees"); 
    $stmt->execute();


    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt->fetchAll() as $k=>$v) { 
        print_r ($v);
    }
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo "<pre>";
var_dump($stmt , $conn);
echo "</pre>";


?>
echo "<pre>";
var_dump($stmt , $conn);
echo "</pre>";

