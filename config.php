<?php
session_start();
include 'function.php';

$conn = conndb();

$error = "";

if (!$conn) {
    die();
    header('Location: index.php');
}

if (!$_SESSION) {
    header('Location: index.php');  
}

// Trayendo proyectos de x usuario

$usuario = $_SESSION['User'];

$statement = $conn->prepare("SELECT * FROM proyectos WHERE usuario = :usuario");
$statement->execute(array(
    ':usuario' => $usuario,
));

$resultados = $statement->fetchAll();

if (empty($resultados)) {
    $error .= "Su usuario no cuenta con proyectos almacenados";
} 




include 'config.view.php';