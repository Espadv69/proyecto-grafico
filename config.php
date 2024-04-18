<?php

session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "graficos";
$conn = mysqli_connect($host, $username, $password, $dbname);


if (!$conn) {
    die("conexion fallida". mysqli_connect_error());
}

