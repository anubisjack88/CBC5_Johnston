<!DOCTYPE html>
<html>
<head>
   <title></title>
   
   </head>
   <body>
   <form method='POST'>
   <h2>Enter das name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php

$name = $_POST['Evans'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
} 
echo "<h3> What's good $name </h3>";
echo $name ? 'true': 'false';
if (empty($name)) {
    echo "Name is empty";
    echo $name;
}
?>
</body>
</html>