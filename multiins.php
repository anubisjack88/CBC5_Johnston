<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction('Fatma');
    // our SQL statements
    $conn->exec("INSERT INTO myemployees (firstname, lastname, email) 
    VALUES ('Travis', 'John', 'john@example.com')");
    $conn->exec("INSERT INTO myemployees (firstname, lastname, email) 
    VALUES ('Joe', 'Ruby', 'mary@example.com')");
    $conn->exec("INSERT INTO myemployees (firstname, lastname, email) 
    VALUES ('Gold', 'Jackson', 'julie@example.com')");

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

$conn = null;
?>