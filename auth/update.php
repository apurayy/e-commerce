<?php
    require_once('db/config.php');
    
    //user_update==============================
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $user_images = $_FILES['user_images']['name'];
        $tmp_name = $_FILES['user_images']['tmp_name'];

        $query = "UPDATE user SET name='$name',username='$username',email='$email',image='$user_images' WHERE id=$id";

        $sql= $conn->query($query);

        if($sql){
            move_uploaded_file($tmp_name, 'upload/'.$user_images);
            $msg = "Data Update Successfull!";
            header("location:all_user.php?msg=$msg");
        }
        else{
            $msg = "Data Update Faild!";
            header("location:edit.php?msg=$msg");
        }
    }


    //Category_update=====================
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


    //brand_update========================
    if(isset($_GET['brand_id'])){
        $brand_id = $_GET['brand_id'];

        $brand_name = $_POST['brand_name'];
        $brand_images = $_FILES['brand_images']['name'];
        $tmp_name = $_FILES['brand_images']['tmp_name'];

        $brand_query = "UPDATE brand SET brand_name='$brand_name',brand_image='$brand_images' WHERE brand_id=$brand_id";

        $brand_sql = $conn->query($brand_query);

        if($brand_sql){
            move_uploaded_file($tmp_name, 'upload/'.$brand_images);
            $msg = "Brand Update Successfull!";
            header("location:show_brand.php?brand_msg=$msg");
        }
        else{
            $msg = "Brand Update Faild!";
            header("location:show_brand.php?brand_msg=$msg");
        }

    }


    //product_update========================
    if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];

        $product_name = $_POST['product_name'];
        $product_regular_price = $_POST['product_regular_price'];
        $product_sale_price = $_POST['product_sale_price'];
        $product_image = $_FILES['product_image']['name'];
        $tmp_name = $_FILES['product_image']['tmp_name'];

        $product_query = "UPDATE product SET product_name='$product_name',product_regular_price='$product_regular_price',product_sale_price='$product_sale_price',product_image='$product_image' WHERE product_id=$product_id";

        $product_sql = $conn->query($product_query);

        if($product_sql){
            move_uploaded_file($tmp_name, 'upload/'.$product_image);
            $msg = "Product Update Successfull!";
            header("location:show_product.php?product_msg=$msg");
        }
        else{
            $msg = "Product Update Faild!";
            header("location:show_product.php?product_msg=$msg");
        }

    }


?>