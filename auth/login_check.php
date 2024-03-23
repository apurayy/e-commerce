<?php
    require_once('db/config.php');
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];


    //username = 'admin' and password = '1234';

    $query = "SELECT * FROM user WHERE username='$username' && password='$password'";
    $sql = $conn->query($query);
    if($sql->num_rows>0){
        $rows=$sql->fetch_assoc();
        echo "Login Successfull!";
        $_SESSION['username'] = $username;
        $_SESSION['user_image'] = $rows['image'];
        header("location:dashboard.php");
    }
    else{
        $msg = "Login Failed!";
        header("location:login.php?msg=$msg");
    }
    exit();

?>