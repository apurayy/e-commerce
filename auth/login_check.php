<?php

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];


    //username = 'admin' and password = '1234';

    if($username=='admin' && $password=='1234'){
        echo "Login Successfull!";

        $_SESSION['username'] = $username;

        header("location:dashboard.php");
    }
    else{
        $msg = "Login Failed!";
        header("location:login.php?msg=$msg");
    }






?>