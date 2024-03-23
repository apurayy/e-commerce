<?php
    include 'db/config.php';

    if(isset($_POST['product_add'])){
        $cat_name = $_POST['cat_name'];
        $cat_images = $_FILES['cat_images']['name'];
        $tmp_name = $_FILES['cat_images']['tmp_name'];

        $query = "INSERT INTO catagory(cat_name,cat_image) VALUES ('$cat_name','$cat_images')";

        $sql = $conn->query($query);

        if ($sql) {
            move_uploaded_file($tmp_name, 'upload/'.$cat_images);
            $msg = "Category Add Successfull!";
            header("location:add_cat.php?msg1=$msg");
        } else {
            $msg = "Category Add Faild!";
            header("location:add_cat.php?msg1=$msg");
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
                            <h3>Add Product</h3>
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
                                            <input type="text" class="form-control input-lg" placeholder="Product Name" name="product_name">
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <input type="number" class="form-control input-lg" placeholder="Product Regular Price" name="product_regular_price">
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <input type="number" class="form-control input-lg" placeholder="Product Sale Price" name="product_sale_price">
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <select name="brand_id" class="form-control input-lg" id="">
                                            <option value="">Select Brand</option>
                                            <?php
                                                include('db/config.php');
                                                $query = "SELECT * FROM brand";
                                                $sql = $conn->query($query);
                                                if($sql->num_rows>0){
                                                    while($row=$sql->fetch_assoc()){
                                            ?>
                                                <option value="<?php echo $row['brand_id'];?>"><?php echo $row['brand_name'];?></option>
                                            <?php }?>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <select name="cat_id" class="form-control input-lg" id="">
                                            <option value="">Select Category</option>
                                            <?php
                                                include('db/config.php');
                                                $query = "SELECT * FROM catagory";
                                                $sql = $conn->query($query);
                                                if($sql->num_rows>0){
                                                    while($row=$sql->fetch_assoc()){
                                            ?>
                                                <option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></option>
                                            <?php }?>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <input type="file" class="form-control input-lg" name="product_images">
                                        </div>

                                        

                                        <button type="submit" class="btn btn-primary btn-pill mb-4" name="product_add">Add Product</button>  
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
}
}
?>