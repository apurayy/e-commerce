<?php

    session_start();
    require_once("header.php");
    require_once("sidebar.php");
    require_once("topbar.php");
?>
        <div class="content-wrapper">
            <div class="content">
                <!-- Table Product -->
                <div class="row">
                  <div class="col-12">
                    <div class="card card-default">
                      <div class="card-header">
                        <h2>User List</h2>
                        
                      </div>
                      <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>User Name</th>
                              <th>Email</th>
                              <th>Images</th>
                              <th>Action</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                include('db/config.php');
                                $query = "SELECT * FROM user";
                                $sql = $conn->query($query);
                                if($sql->num_rows>0){
                                    while($row=$sql->fetch_assoc()){

                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td>Img</td>
                                <td>
                                    <div class="dropdown">
                                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">view</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure delete?')">Delete</a>
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
