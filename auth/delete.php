<?php
    include('db/config.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM user WHERE id=$id";

        $sql = $conn->query($query);

        if($sql){
            $msg = "User Data Delete Successfull!";
            header("location:all_user.php?msg=$msg");
        }
        else{
            $msg = "OOPS! User Data Delete Faild.";
            header("location:all_user.php?msg=$msg");
        }
    }

    if(isset($_GET['cat_id'])){
        $cat_id = $_GET['cat_id'];

        $cat_query = "DELETE FROM catagory WHERE cat_id=$cat_id";
        $cat_sql = $conn->query($cat_query);

        if($cat_sql){
            $msg = "Category Delete Successfull!";
            header("location:all_cat.php?cat_msg=$msg");
        }
        else{
            $msg = "OOPS! Category Delete Faild.";
            header("location:all_cat.php?cat_msg=$msg");
        }
    }

?>