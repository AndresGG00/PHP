<?php

header("Refresh: 0; url=index.php");


$host = "localhost";
$user = "root";
$password = "";
$database = "tiendassd";


$c_licor = $_POST['email'];
$c_marca = $_POST['dni'];


$db = new mysqli($host, $user, $password, $database);

$query = "INSERT INTO clientes (email , dni) VALUES ('$c_licor','$c_marca')";
$db->query($query);


?>
