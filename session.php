<?php
session_start();

include 'function.php';
$conn = conndb();

if (!$conn) {
    die();
}

if (!$_SESSION) {
    echo "<script>alert('Acceso restringido!')</script>";
    header('Location: index.php');
}

$usuario = $_SESSION['User'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) { // Si los datos enviados del formulario son por post
    $date = !empty($_POST['date']) ? $_POST['date'] : '12/12/12'; 
    $project = $_POST['project'];
    $time = $_POST['time'];
    $task = $_POST['task'];
    $description = $_POST['description'];

    $statement = $conn->prepare("INSERT INTO proyectos (id, proyecto, date, time, task, usuario, descripcion) VALUES (null, :proyecto, :date, :time,:task,:usuario ,:descripcion )"); //Consulta Insertar datos del formulario en la base de datos
    $statement->execute(array(
        ':proyecto' => $project,
        ':date' => $date,
        ':task' => $task,
        ':time' => $time,
        ':descripcion' => $description,
        ':usuario' => $usuario,
    ));
}


include 'session.view.php';