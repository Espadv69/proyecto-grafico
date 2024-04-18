<?php 
include "conect.php";

$conn = conectar();
$nombre = $_POST["emp_nombre"];
$salario = $_POST["salario"];
$genero = $_POST["genero"];
$ciudad = $_POST["ciudad"];
$email = $_POST["email"];

$consulta = "INSERT INTO empleados(emp_nombre, salario, genero, ciudad, email)VALUES(
    '$nombre',
    '$salario',
    '$genero',
    '$ciudad',
    '$email'
)";
    $query = mysqli_query($conn, $consulta);

    if($query) {
        header("location: index.php");
        exit();
    } else {

    }

