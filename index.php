<?php
session_start();
include 'function.php';

$conn = conndb();
$error = "";
$message = "";

if (!$conn) {
    die();
}

if (isset($_POST['button'])) {
    switch ($_POST['button']) {
        case 'login':

            if (!empty($_POST['email']) || !empty($_POST['psw'])) {
                $email = $_POST['email'];
                $psw = $_POST['psw'];

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = "enter valid email >:(";
                } else {
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);    
                }
            
                $statement = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :pass");
                $statement->execute(array(
                    ':email' => $email,
                    ':pass' => $psw
                ));

                $result = $statement->fetchAll();

                if ($result != false) {
                    $_SESSION['User'] = $email;
                    header('Location: session.php');
                } else {
                    $error .= "Please fill in all fields!!!!!!!";
                }
            } else {
                $error .= "Error!"; 
            }

            break;
            
        case 'registro': 
            
            if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['psw'])) {
                $error .= "Please fill in all fields!!!!!!!";
            } else {

                if (is_string($_POST['fname'])) {
                    $fname = cleardata($_POST['fname']);
                }
                
                if (is_string($_POST['lname'])) {
                    $lname = cleardata($_POST['lname']);
                }
                
                $email = cleardata($_POST['email']);

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error .= "enter valid email!";
                } else {
                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                }
               
                $psw = cleardata($_POST['psw']);
            
                
                $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
                $statement->execute(array(
                    ':email' => $email,
                ));

                $result = $statement->fetchAll();

                if ($result == true) {
                    $error .= "email already exists";
                } 
                

                if ($error == '') {
                    $statement = $conn->prepare("INSERT INTO users (id, user, lname, password, email) VALUES (null, :user, :lname, :password, :email)");

                    $statement->execute(array(
                        ':user' => $fname,
                        ':lname' => $lname,
                        ':password' => $psw,
                        ':email' => $email, 
                    ));

                    $message .= "yay!";
                    header('Location: index.php');
                }
            }

            break;
           
    }
}


include 'index.view.php';