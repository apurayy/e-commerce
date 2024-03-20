<?php
    include('db/config.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM user WHERE id=$id";

        $sql = $conn->query($query);

        if($sql){
            $msg = "User Data Delete Successfull!";
            header("location:show_user.php?msg=$msg");
        }
        else{
            $msg = "OOPS! User Data Delete Faild.";
            header("location:show_user.php?msg=$msg");
        }
    }

?>