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
                                if(isset($_GET['cat_msg'])){
                                    echo $_GET['cat_msg'];
                                }
                            ?>
                        </h4>    
                            
                        <div class="card-header">
                            <h2>All Category</h2>
                            
                        </div>
                        <div class="card-body">
                            <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Images</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('db/config.php');
                                    $query = "SELECT * FROM catagory";
                                    $sql = $conn->query($query);
                                    if($sql->num_rows>0){
                                        while($row=$sql->fetch_assoc()){

                                ?>
                                <tr>
                                    <td><?php echo $row['cat_id']; ?></td>
                                    <td><?php echo $row['cat_name']; ?></td>
                                    <td>Img</td>
                                    <td>
                                        <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="cat_edit.php?cat_id=<?php echo $row['cat_id'];?>">Edit</a>
                                            <a class="dropdown-item" href="delete.php?cat_id=<?php echo $row['cat_id'];?>" onclick="return confirm('Are you sure delete?')">Delete</a>
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
