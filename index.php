<form action = "./add.php"method ="post"> 
<input type = "text" name = "task">
<input type = "submit">
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, task FROM mytask"); 
    $stmt->execute();

    
    $results = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $results = $stmt->fetchAll();
    
    
    foreach($results as $result){
?>
        <li><?php echo $result["task"]; ?></li>
        <form action = "./delete.php"method ="post"> 
        <input type = "text" name = "id" value = <?php echo $result["id"];?> hidden >
        <input type = "submit">
    
        </form>

 <?php
    }
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";


?>


