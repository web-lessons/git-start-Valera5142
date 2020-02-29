<?php
$host = '127.0.0.1';
$login = 'root';
$password = '';
$datdbase = 'first_mtsql';
$mysqli = mysqli_connect($host, $login, $password);
if($mysqli->connect_error){
    die("ТЫ ЛОХ");
}
else{
    echo"HYPE".'<br>';
}
$query = 'SELECT * FROM `products`';
$result = mysqli_query($mysqli, $query);
var_dump($result);
