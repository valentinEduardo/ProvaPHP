<?php
 $db = "school";
    $host = "localhost";
    $user = "root";
    $pass = "";
try {
   
   $connection = new PDO("mysql:dbname=$db; host=$host", "$user", "$pass");
} catch (PDOException $e) {
echo $e->getMessage();
    
}
