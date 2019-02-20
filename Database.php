<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $sql = "CREATE TABLE todo! (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    cleanroom VARCHAR(30) NOT NULL,
    callVA VARCHAR(30) NOT NULL,
    codemore VARCHAR(50),
    createcode
    reg_date TIMESTAMP
    )";

  
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>