<?php
    include 'db/config.php';

    if(isset($_POST['brand_add'])){
        $brand_name = $_POST['brand_name'];
        $brand_images = $_FILES['brand_images']['name'];
        $tmp_name = $_FILES['brand_images']['tmp_name'];

        $query = "INSERT INTO brand(brand_name, brand_image) VALUES ('$brand_name','$brand_images')";

        $sql = $conn->query($query);

        if ($sql) {
            move_uploaded_file($tmp_name, 'upload/'.$brand_images);
            $msg = "Brand Add Successfull!";
            header("location:add_brand.php?msg1=$msg");
        } else {
            $msg = "Brand Add Faild!";
            header("location:add_brand.php?msg1=$msg");
        }
    }

?>

<?php

session_start();

if (isset($_SESSION['username'])) {

    require_once "header.php";

    require_once "sidebar.php";

    require_once "topbar.php";

    ?>

        <div class="content-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-xl-6 col-sm-6">
                        <div class="card card-default card-mini p-4">
                            <h3>Add Brand</h3>
                            <h4 class="text-warning">
                                <?php 
                                    if(isset($_GET['msg1'])){
                                        echo $_GET['msg1'];
                                    }
                                ?>
                            </h4>
                            <div class="card-header">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-12 mb-4">
                                            <input type="text" class="form-control input-lg" placeholder="Brand Name" name="brand_name" required>
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <input type="file" class="form-control input-lg" name="brand_images">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-pill mb-4" name="brand_add">Add Brand</button>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <?php
    require_once "footer.php";

    ?>

    <?php } else {
    $msg = "You are not login!";
    header("location:login.php?msg=$msg");
}

?>




