<?php
    session_start();
    $qty = $_POST['qty'];
    $pro_id = $_POST['pro_id'];

    $_SESSION['cart'][$pro_id]['qty'] = $qty;

    header("location:cart.php?msg=Cart Update Done");

?>