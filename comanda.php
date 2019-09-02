


<?php require_once 'config.php'; ?>
<?php require_once 'inc/database.php'; ?>
<?php     include 'inc/sidemenu.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
     }
     
     if($_SESSION['admin']=='true'){
         if(!isset($_SESSION['pagead'])){
             $_SESSION['pagead']='1';
         }
if($_SESSION['pagead']=='1'){
    include('inc/admin/pedidos.php');
}
elseif($_SESSION['pagead']=='2'){
    include('inc/admin/funcionarios.php');
}
elseif($_SESSION['pagead']=='3'){
    include('inc/admin/produtocad.php');
}
elseif($_SESSION['pagead']=='4'){
    include('inc/admin/usuariocad.php');
}
elseif($_SESSION['pagead']=='5'){
    include('inc/admin/estoque.php');
}
     }
     else{
       echo "<script>window.location.href = 'index.php'</script>";
     }
?>



<?php include(FOOTER_TEMPLATE); ?>
