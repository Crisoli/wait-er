
<?php require_once 'config.php'; ?>
<?php require_once 'inc/database.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
     }
if($_SESSION['pagead']=='1'){
    include('inc/pedidos.php');
}
elseif($_SESSION['pagead']=='2'){
    include('inc/cardapiocad.php');
}
elseif($_SESSION['pagead']=='3'){
    echo 'page3';
}     
?>
<?php include(FOOTER_TEMPLATE); ?>
