<?php
   
   if(isset($_GET['id'])){
      $pro_id = $_GET['id'];
      
      if(!empty($_SESSION['cart'])){
         $pro_id_check = array_column($_SESSION['cart'],'pro_id');

         if(in_array($pro_id,$pro_id_check)){
            $_SESSION['cart'][$pro_id]['qty'] +=1;
         }
         else{
            $item = [
               'pro_id' => $_GET['id'],
               'product_name' => "Shirt",
               'product_price' => "100",
               'qty'    => 1
            ];
            $_SESSION['cart'][$pro_id]=$item;

         }
         // var_dump($_SESSION['cart']);

      }
      else{
         $item = [
            'pro_id' => $_GET['id'],
            'product_name' => "Shirt",
            'product_price' => "100",
            'qty'    => 1
         ];
   
         $_SESSION['cart'][$pro_id]=$item;
      }

   }


?>
      

      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>

            <div class="row">
               <?php
                  include('auth/db/config.php');
                  $query = "SELECT * FROM product";
                  $sql = $conn->query($query);
                  if($sql->num_rows>0){
                     while($row=$sql->fetch_assoc()){

               ?>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="?id=<?php echo $row['product_id'] ?>" class="option1">
                           Add to Card
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="images/p1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           <?php echo $row['product_name'] ?>
                        </h5>
                        <h6>
                           <?php echo $row['product_sale_price'] ?>
                        </h6>
                     </div>
                  </div>
               </div>
               <?php
                  }
               }
               ?>
            </div>

            <div class="btn-box">
               <a href="product.php">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->
