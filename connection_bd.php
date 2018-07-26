<?php
$host="localhost";
$user="Admin";
$password="12345";
$db="future_test";
$con = mysqli_connect($host, $user, $password) or die("MySQL сервер недоступен!".mysqli_error());
$con_db = mysqli_select_db($con, $db) or die("Нет соединения с БД".mysqli_error());
?>