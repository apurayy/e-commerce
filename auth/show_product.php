<?php

session_start();

if (isset($_SESSION['username'])) {

    require_once("header.php");

    require_once("sidebar.php");

    require_once("topbar.php");

    ?>

    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-default">
                        <h4 class="text-warning p-2">
                            <?php
                                if(isset($_GET['product_msg'])){
                                    echo $_GET['product_msg'];
                                }
                            ?>
                        </h4>    
                            
                        <div class="card-header">
                            <h2>All Product</h2>
                            
                        </div>
                        <div class="card-body">
                            <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Regular Price</th>
                                <th>Sale Price</th>
                                <th>Product Images</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('db/config.php');
                                    $query = "SELECT * FROM product";
                                    $sql = $conn->query($query);
                                    if($sql->num_rows>0){
                                        while($row=$sql->fetch_assoc()){

                                ?>
                                <tr>
                                    <td><?php echo $row['product_id']; ?></td>
                                    <td><?php echo $row['product_name']; ?></td>
                                    <td><?php echo $row['product_regular_price']; ?></td>
                                    <td><?php echo $row['product_sale_price']; ?></td>
                                    <td><img src="upload/<?php echo $row['product_image'];?>" alt=""></td>
                                    <td>
                                        <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="edit_product.php?product_id=<?php echo $row['product_id'];?>">Edit</a>
                                            <a class="dropdown-item" href="delete.php?product_id=<?php echo $row['product_id'];?>" onclick="return confirm('Are you sure delete?')">Delete</a>
                                        </div>
                                        </div>
                                </td>
                                </tr>

                            <?php }
                                }
                                ?>

                            </tbody>
                            </table>

                        </div>
                        </div>
                </div>
            </div>
        </div>



    <?php
    
    require_once("footer.php");

    ?>

    <?php } else {
    $msg = "You are not login!";
    header("location:login.php?msg=$msg");
}

?>
