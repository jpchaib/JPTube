<?php
ob_start();//Turns on output buffering

date_default_timezone_set("Australia/Sydney");

try {
    $con = new PDO("mysql:dbname=jptube;host=localhost:3308", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>