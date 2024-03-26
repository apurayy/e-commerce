<?php

    session_start();

    if(isset($_GET['id'])){
        $pro_id = $_GET['id'];
        unset($_SESSION['cart'][$pro_id]);

        header("location:cart.php?msg=Cart Item Remove Done");
    }

   

?>