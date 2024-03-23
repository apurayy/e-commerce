<?php

    require_once('db/config.php');

    if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];

        $query = "SELECT * FROM product WHERE product_id=$product_id";
        $sql = $conn->query($query);

        $row = $sql->fetch_assoc();
    }
    
?>

<?php require_once('header.php'); ?>

  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-lg-8 col-xl-8 col-md-10 ">
                <div class="card card-default mb-0">
                  <div class="card-body px-5 pb-5 p-2">
                    <h4 class="text-dark text-center mb-5">Edit Category</h4>

                    <form action="update.php?product_id=<?php echo $row['product_id'];?>" method="post" enctype="multipart/form-data">
                      <div class="row">

                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg"  value="<?php echo $row['product_name'];?>" name="product_name">
                        </div>

                        <div class="form-group col-md-12 mb-4">
                            <input type="number" class="form-control input-lg" value="<?php echo $row['product_regular_price'];?>" name="product_regular_price">
                        </div>

                        <div class="form-group col-md-12 mb-4">
                            <input type="number" class="form-control input-lg" value="<?php echo $row['product_sale_price'];?>" name="product_sale_price">
                        </div>

                        <div class="form-group col-md-12 mb-4">
                          <input type="file" class="form-control input-lg"  value="<?php echo $row['product_image'];?>" name="product_image">
                        </div>
                        
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary btn-pill mb-4" name="sign_up">Update</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>