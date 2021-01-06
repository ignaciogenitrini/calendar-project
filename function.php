<?php

function conndb() {
    try {
        $connection = new PDO('mysql:host=localhost;dbname=prueba', 'root', '');
        return $connection;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}



function cleardata($data) {
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);

    return $data;
}
