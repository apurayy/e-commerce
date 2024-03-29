<?php require_once('header.php');
   include('auth/db/config.php');

   if(isset($_GET['id'])){
      $pro_id = $_GET['id'];
      
      
      $query = "SELECT * FROM product where product_id=$pro_id";
      $sql = $conn->query($query);
      
      $row=$sql->fetch_assoc();
      

      if(!empty($_SESSION['cart'])){
         $pro_id_check = array_column($_SESSION['cart'],'pro_id');

         if(in_array($pro_id,$pro_id_check)){
            $_SESSION['cart'][$pro_id]['qty'] +=1;
         }
         else{
            $item = [
               'pro_id' => $_GET['id'],
               'product_name' => $row['product_name'],
               'product_price' => $row['product_sale_price'],
               'image' => $row['product_image'],
               'qty'    => 1
            ];
            $_SESSION['cart'][$pro_id]=$item;

         }
         // var_dump($_SESSION['cart']);

      }
      else{
         $item = [
            'pro_id' => $_GET['id'],
            'product_name' => $row['product_name'],
            'product_price' => $row['product_sale_price'],
            'image' => $row['product_image'],
            'qty'    => 1
         ];
   
         $_SESSION['cart'][$pro_id]=$item;
      }

   }


?>



      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->

      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>

            <div class="row">
               <?php
                 
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
                        <img src="auth/upload/<?php echo $row['product_image'];?>" alt="">
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
            
         </div>
      </section>
      <!-- end product section -->

<?php require_once('footer.php'); ?>