<?php
session_start();

error_reporting(0);
header('Content-type:application/json; chatset=utf-8');

include 'function.php';

$error = "";
$conn = conndb();

if (!$conn) {
    die();
}

// Funcion que trae proyectos en base al usuario

$usuario = $_SESSION['User'];

$statement = $conn->prepare('SELECT * FROM proyectos WHERE usuario = :usuario');
$statement->execute(array(
    ':usuario' => $usuario,
));

/*
$res = $statement->fetchAll();

if (empty($res)) {
    $error .= "Su usuario no cuenta con proyectos almacenados"; 
} 
*/

$resultado = [];

while ($fila = $statement->fetch(PDO::FETCH_ASSOC)) { // Mientras exista un proyecto en la base de datos se crea un array nuevo con los datos
        $proyecto = [
        'proyecto' => $fila['proyecto'],
        'tarea' => $fila['task'],
        'fecha' => $fila['date'],
        'tiempo' => $fila['time'],
        'descripcion' => $fila['descripcion'],
    ];
        array_push($resultado, $proyecto); // Pasando los datos del array proyecto a un array vacio
}

 
echo json_encode($resultado); // Convirtiendo los datos en json