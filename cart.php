<?php
   require_once('header.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <table class="table">
                    <h4>
                        <?php
                            if(isset($_GET['msg'])){
                                echo $_GET['msg'];
                            }
                        ?>
                    </h4>
                    <tr>
                        <th>SL No</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Price</th>
                        <th>Product Qty</th>
                        <th>Product Total Price</th>
                        <th>Action</th>
                    </tr>

                    <?php 
                                          
                        if(isset($_SESSION['cart'])){
                            $sl_no = 1;
                            foreach($_SESSION['cart'] as $single_cart){
                    ?>

                    <form action="cart_update.php" method="post">
                        <tr>
                            <td><?php echo $sl_no ?></td>

                            <td>
                                <?php echo $single_cart['product_name'] ?>
                                <input type="hidden" name="pro_id" value="<?php echo $single_cart['pro_id'] ?>">
                            </td>

                            <td>
                                <img width="150px" height="150px" src="auth/upload/<?php echo $single_cart['image'] ?>" alt="">
                            </td>

                            <td><?php echo $price = $single_cart['product_price'] ?></td>
                            <td>
                                <input type="number" name="qty" value="<?php echo $total_qty = $single_cart['qty'] ?>">
                            </td>
                            <td><?php echo $price*$total_qty?></td>
                            <td>
                                <button class="btn btn-primary">Update</button>
                                <a href="remove_item.php?id=<?php echo $single_cart['pro_id'] ?>" class="btn btn-warning text-white">Remove</a>
                            </td>
                        </tr>
                    </form>

                    <?php
                        $sl_no++;
                    }}?>

                </table>
            </div>
        </div>
    </div>
   
<?php
   require_once('footer.php');
?>
