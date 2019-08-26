
<?php require_once 'config.php'; ?>
<?php require_once 'inc/database.php'; ?>
<?php     include 'inc/sidemenu.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
     }
     if($_SESSION['admin']=='true'){
if($_SESSION['pagead']=='1'){
    include('inc/admin/pedidos.php');
}
elseif($_SESSION['pagead']=='2'){
    include('inc/admin/updatecard.php');
}
elseif($_SESSION['pagead']=='3'){
    include('inc/admin/produtocard.php');
}
elseif($_SESSION['pagead']=='4'){
    include('inc/admin/usuariocad.php');
}    
     }
     else{
        header('location:index.php');
     } 
?>
<?php include(FOOTER_TEMPLATE); ?>
