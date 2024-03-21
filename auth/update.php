<?php
    require_once('db/config.php');
    
    $id = $_GET['id'];

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];


    $query = "UPDATE user SET name='$name',username='$username',email='$email' WHERE id=$id";

    $sql= $conn->query($query);

    if($sql){
        $msg = "Data Update Successfull!";
        header("location:all_user.php?msg=$msg");
    }
    else{
        $msg = "Data Update Faild!";
        header("location:edit.php?msg=$msg");
    }


?>