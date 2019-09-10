<?php session_start(); ?>
<!-- JQuery / Materialize CSS + JavaScript imports -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<!-- HTML -->
<div id="page-container">
<div id="content-wrap">

  <nav id="navbar" class="nav-extended">
    <div class="nav-wrapper">
  <?php if($_SESSION['admin']=='false'){
    echo "
      <a href='#' data-activates='slide-out2' class='button-collapse show-on-medium-and-up right sidenav1 '><i class='material-icons'>menu</i></a>
      ";
  };
  ?>
     <a href="#" data-activates="slide-out" class="button-collapse show-on-medium-and-up"><i class="material-icons">menu</i></a>

      <a href="#" class="brand-logo center">  <img src='inc/img/Waiterlogo.png' style='max-height:200%; max-width:100px;'> </a>

<?php
if(isset($_SESSION['pagead'])){
  if($_SESSION['pagead']==1){
    ?><div class='nav-content'>
  <ul class='tabs tabs-transparent'>
    <li class='tab'><a href='#pen'>Pendentes</a></li>
    <li class='tab'><a href='#fin'>Finalizados</a></li>
    <li class='tab'><a href='#rec'>Finalizados recentemente</a></li>
  </ul>
   </div>
   <?php
  }
}
if(isset($_SESSION['pagefu'])){
  if($_SESSION['pagefu']==1){
    ?>
    <div class='nav-content'>
      <ul class='tabs tabs-transparent'>
        <?php
$categorys = $mysqli->query("SELECT * FROM category");
    while($rys = mysqli_fetch_array($categorys))
    {
      ?>
      <li class='tab'><a href='redirect.php?cat=<?php echo $rys['name'];?>'><?php echo $rys['name'];?></a></li>
      <?php
    }
  }
}
     ?>
   </div>
  </nav>


        <ul id="slide-out" class="side-nav " style="background-color:black;">
        <div class="user-view">
          <a href="#user"><img class="circle z-depth-2" style="max-height:200%; max-width:70px;" src="<?php echo $_SESSION['img'];?>"></a></br>
          <a href="#name"><span class="white-text"><?php echo $_SESSION['username'];?></span></a>
          <a href='logoff.php' name='logoff'><span class="white-text">Logoff</span></a>
        </div>
<?php
if($_SESSION['admin']=='true'){
  echo "
  <li><a class='waves-effect white-text' href='redirect.php?pagead=5'><i class='material-icons white-text'>archive</i>Estoque</a></li>
  <li><a class='waves-effect white-text' href='redirect.php?pagead=2'><i class='material-icons white-text'>assignment_ind</i>Funcionários</a></li>
  <li><a class='waves-effect white-text' href='redirect.php?pagead=1'><i class='material-icons white-text'>content_paste</i>Pedidos</a></li>
  <li><a class='waves-effect white-text' href='redirect.php?pagead=3'><i class='material-icons white-text'>archive</i>Adicionar ao Cardápio</a></li>
  <li><a class='waves-effect white-text' href='redirect.php?pagead=4'><i class='material-icons white-text'>archive</i>Registrar Funcionário</a></li>
  ";
};
?>

<?php
if($_SESSION['admin']=='false'){

  echo"
  <li><a class='waves-effect white-text' href='redirect.php?pagead=6&pagefu=1'><i class='material-icons white-text'>local_library</i>Cardápio</a></li>
  <li><a class='waves-effect white-text' href='redirect.php?pagead=7&pagefu=2'><i class='material-icons white-text'>people_outline</i>Ranking</a></li>
  ";

};
?>
  </ul>
<?php
if($_SESSION['admin']=='false'){
echo "
<div class='container' >
    <ul id='slide-out2' class='side-nav' style='background-color:white; width:95%;'>
";
          include 'inc/employers/shoppingcartinsert.php';
echo "
   </ul>
</div>";
}
?>




<script type="text/javascript">
</script>

<script type="text/javascript">
	$(".button-collapse").sideNav();
  $('.button-collapse.sidenav1').sideNav({
      menuWidth: 300, // Normal 300
      edge:'right', // Definir se o menu vai ficar na direita ou esquerda
      closeOnClick: true, //
      draggable: true, //
      onOpen: function(el) { },
      onClose: function(el) { },
    }
  );
  </script>
