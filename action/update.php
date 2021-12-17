<?php

require_once 'db_connect.php';

if (isset($_POST['btn-edit'])):
    $name =mysqli_escape_string($connect, $_POST['name']);
    $email =mysqli_escape_string($connect, $_POST['email']);
    $birthday =mysqli_escape_string($connect, $_POST['birthday']);
    $gender =mysqli_escape_string($connect, $_POST['gender']);
    $id = mysqli_escape_string($connect, $_POST ['id']);

    $sql = "UPDATE users SET name = '$name', email = '$email', birthday = '$birthday', gender = '$gender' WHERE id = '$id'";

    if  (mysqli_query($connect, $sql)):
        header('Location: ../index.php');
    endif;
endif;
?>
