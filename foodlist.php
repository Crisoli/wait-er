
<?php require_once 'config.php'; ?>
<?php require_once 'inc/database.php'; ?>
<?php     include 'inc/sidemenu.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
     }

     if(isset($_SESSION['admin'])){
         if(!isset($_SESSION['pagefu'])){
             $_SESSION['pagefu']='1';
         }
if($_SESSION['pagefu']=='1'){
    include('inc/employers/shoppingcart.php');
}
elseif($_SESSION['pagefu']=='2'){
    include('inc/employers/ranking.php');
}
elseif($_SESSION['pagefu']=='profile'){
    include('inc/profile.php');
}

     }

?>
<?php include(FOOTER_TEMPLATE); ?>
