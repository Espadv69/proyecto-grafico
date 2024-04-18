<?php
function conectar() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "graficos";

    $conn = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conn, $db);
    return $conn;
}
