<?php
    session_start();

    $userName=$_SESSION['name'];
    $userEmail=$_SESSION['email'];

    if(!isset($_SESSION['name'])){
        header("location: /login/login.php");
    }
?>