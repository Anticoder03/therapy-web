<?php
$host = 'localhost';
$usr = 'root';
$pass = '';
$db = 'lab-web';

$conn = new mysqli($host,$usr,$pass,$db);
if( $conn->connect_error){
    echo "failed to connect to database";
}


?>


