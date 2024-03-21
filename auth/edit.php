<?php

    require_once('db/config.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM user WHERE id=$id";
        $sql = $conn->query($query);

        $row = $sql->fetch_assoc();
    }
?>

<?php require_once('header.php'); ?>

  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-xl-5 col-md-10 ">
                <div class="card card-default mb-0">
                  <div class="card-body px-5 pb-5 p-2">
                    <h4 class="text-dark text-center mb-5">Edit User</h4>

                    <form action="update.php?id=<?php echo $row['id'];?>" method="post">
                      <div class="row">
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg"  value="<?php echo $row['name'];?>" name="name">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" value="<?php echo $row['username'];?>" name="username">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="email" class="form-control input-lg" value="<?php echo $row['email'];?>" name="email">
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