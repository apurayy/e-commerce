<?php
    include('db/config.php');

    //user_delete================
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

    //category_delete================================
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


    //brand_delete================================
    if(isset($_GET['brand_id'])){
        $brand_id = $_GET['brand_id'];

        $brand_query = "DELETE FROM brand WHERE brand_id=$brand_id";
        $brand_sql = $conn->query($brand_query);

        if($brand_sql){
            $msg = "Brand Delete Successfull!";
            header("location:show_brand.php?brand_msg=$msg");
        }
        else{
            $msg = "OOPS! Brand Delete Faild.";
            header("location:show_brand.php?brand_msg=$msg");
        }
    }

?>