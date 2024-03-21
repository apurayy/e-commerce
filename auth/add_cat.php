<?php
    include 'db/config.php';

    if(isset($_POST['cat_add'])){
        $cat_name = $_POST['cat_name'];

        $query = "INSERT INTO catagory(cat_name) VALUE ('$cat_name')";

        $sql = $conn->query($query);

        if ($sql) {
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
                            <h3>Add Category</h3>
                            <h4 class="text-warning">
                                <?php 
                                    if(isset($_GET['msg1'])){
                                        echo $_GET['msg1'];
                                    }
                                ?>
                            </h4>
                            <div class="card-header">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="form-group col-md-12 mb-4">
                                            <input type="text" class="form-control input-lg" placeholder="Category Name" name="cat_name" required>
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <input type="file" class="form-control input-lg" name="cat_images">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-pill mb-4" name="cat_add">Add Category</button>  
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




