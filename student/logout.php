<?php
    session_start();
    unset($_SESSION['regNo']);
    session_destroy();
    header('Location:../index.php');
?>
