<?php
session_start();
include 'function.php';

$conn = conndb();

if (!$conn) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];

    $statement = $conn->prepare("DELETE FROM proyectos WHERE id = :id");
    $statement->execute(array(
        ':id' => $id,
    ));

    header('Location: config.php');
}