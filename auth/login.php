<?php require_once('header.php'); ?>

  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-md-10">
                <div class="card card-default mb-0">
                  <div class="card-header pb-0">
                    <h4>
                        <?php
                            if(isset($_GET['msg'])){
                                echo $_GET['msg'];
                            }
                        ?>
                    </h4>
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                      <a class="w-auto pl-0" href="/index.html">
                        <img src="images/logo.png" alt="Mono">
                        <span class="brand-name text-dark">My Shop</span>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-5 pb-5 pt-0">

                    <!-- <h4 class="text-dark mb-6 text-center">Sign in for free</h4> -->

                    <form action="login_check.php" method="post">
                      <div class="row">
                        <div class="form-group col-md-12 mb-4">
                          <input type="username" class="form-control input-lg" id="username"
                            placeholder="Username" name="username">
                        </div>
                        <div class="form-group col-md-12 ">
                          <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password">
                        </div>
                        <div class="col-md-12">

                          <div class="d-flex justify-content-between mb-3">

                            <div class="custom-control custom-checkbox mr-3 mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                              <label class="custom-control-label" for="customCheck2">Remember me</label>
                            </div>

                            <a class="text-color" href="#"> Forgot password? </a>

                          </div>

                          <button type="submit" class="btn btn-primary btn-pill mb-4">Login</button>

                          <p>Don't have an account yet ?
                            <a class="text-blue" href="sign-up.php">Sign Up</a>
                          </p>
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
