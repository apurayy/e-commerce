<?php
    include('db/config.php');
    require_once("header.php");
    
?>
   
<?php
   $query = "SELECT * FROM user";
   $sql = $conn->query($query);

  ?>
        <table class="container table shadow">

        <h4 class="text-center text-warning p-3">
            <?php
                if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                }
            ?>
        </h4>
          <tr>
            <th>Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        <?php
          if($sql->num_rows>0){
            while($row=$sql->fetch_assoc()){
              ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="">Edit</a>
                <a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure delete?')">Delete</a>
            </td>
          </tr>

          <?php
        
      }
   }
   ?>
   </table>

  