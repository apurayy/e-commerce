<?php

session_start();

if (isset($_SESSION['username'])) {

    require_once("header.php");

    require_once("sidebar.php");

    require_once("topbar.php");

    require_once("main-content.php");
    
    require_once("footer.php");

    ?>

    <?php } else {
    $msg = "You are not login!";
    header("location:login.php?msg=$msg");
}

?>
