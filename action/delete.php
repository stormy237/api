<?php

require_once 'db_connect.php';

if (isset($_POST['btn-delete1'])):

    $id = mysqli_escape_string($connect, $_POST ['id']);

    $sql = "DELETE FROM users WHERE id ='$id'";

    if  (mysqli_query($connect, $sql)):
        header('Location: ../index.php');
    endif;
endif;
?>
