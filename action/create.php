<?php

require_once 'db_connect.php';

if (isset($_POST['btn-register'])):
    $name =mysqli_escape_string($connect, $_POST['name']);
    $email =mysqli_escape_string($connect, $_POST['email']);
    $birthday =mysqli_escape_string($connect, $_POST['birthday']);
    $gender =mysqli_escape_string($connect, $_POST['gender']);

    $sql = "INSERT INTO users (name, email, birthday, gender) VALUES ('$name', '$email', '$birthday', '$gender')";

    if  (mysqli_query($connect, $sql)):
        header('Location: ../index.php');
    endif;
endif;
?>
