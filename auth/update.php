<?php
    require_once('db/config.php');
    
    if(isset($_GET['id'])){
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
    }

    if(isset($_GET['cat_id'])){
        $cat_id = $_GET['cat_id'];

        $cat_name = $_POST['cat_name'];
        $cat_images = $_FILES['cat_images']['name'];
        $tmp_name = $_FILES['cat_images']['tmp_name'];

        $cat_query = "UPDATE catagory SET cat_name='$cat_name',cat_image='$cat_images' WHERE cat_id=$cat_id";

        $cat_sql = $conn->query($cat_query);

        if($cat_sql){
            move_uploaded_file($tmp_name, 'upload/'.$cat_images);
            $msg = "Category Update Successfull!";
            header("location:all_cat.php?cat_msg=$msg");
        }
        else{
            $msg = "Category Update Faild!";
            header("location:cat_edit.php?cat_msg=$msg");
        }

    }


?>