<?php session_start(); ?>
<!-- JQuery / Materialize CSS + JavaScript imports -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<!-- HTML -->
<style>
html{
background-image: url('inc/img/teste2.png');
background-repeat: no-repeat;
background-size: 100% 30%;}
</style>
<div id="page-container" style="overflow-x: hidden;">
<div id="content-wrap">
  <nav id="navbar" style="background-color:#2D2F40;" class="nav-extended navbar-fixed sidenav-fixed">
    <div class="nav-wrapper">
  <?php if(isset($_SESSION['slide'])){
    if($_SESSION['slide']=='true'){


    echo "
      <a href='#' data-activates='slide-out2' class='button-collapse show-on-medium-and-up right sidenav1 '><i class='material-icons'>format_align_right</i></a>
      ";
    };
  };
  ?>
     <a href="#" data-activates="slide-out" class="button-collapse show-on-medium-and-up"><i class="material-icons">menu</i></a>
<?php
if(isset($_SESSION['pagead'])){
  if($_SESSION['pagead']==1){
    ?>
    <div class='nav-content'>
  <ul class='tabs tabs-transparent'>
    <li class='tab'><a href='#pen'>Pendentes</a></li>
    <li class='tab'><a href='#fin'>Finalizados</a></li>
    <li class='tab'><a href='#rec'>Finalizados recentemente</a></li>
    <li class='tab'><a href='#can'>Cancelado</a></li>
  </ul>
   </div>
   <?php
  }
}
if(isset($_SESSION['slide'])){
  if($_SESSION['slide']=='true'){
    ?>
    <div class='nav-content'>
      <ul class='tabs tabs-transparent'>
        <?php
$categorys = $mysqli->query("SELECT * FROM category");
    while($rys = mysqli_fetch_array($categorys))
    {

    echo utf8_encode ("<li class='tab'><a href='#menu".$rys['id']."'>".$rys['name']."</a></li>");

    }
  }
  ?>
</ul>
</div>
  <?php
}
     ?>


  </nav>



  <ul id="slide-out" class="side-nav " style="background-color:#2D2F40;">
  <div class="user-view">
    <div class="center-align">
    <img src="inc/img/Waiterlogo.png" style="position:top; max-height:30%; max-width:30%;">
  </div>
  <div class="background" style="background-color:;">
  <br>
  <div class="center-align">
    <a href="redirect.php?profile_session=my&pagefu=profile&pagead=profile"><img style="width:85px; height:85px; object-fit: cover;" class="circle" src="<?php echo $_SESSION['img'];?>"></a>
  </br>
  <p>
    <a href="redirect.php?profile_session=my&pagefu=profile&pagead=profile"><span class="white-text"><?php echo $_SESSION['username'];?></span></a>
  </p>
  </div>
    <a href='logoff.php' name='logoff'><span class="red-text">Logoff</span></a>
  </div>
  </div>
<br>
<?php
if($_SESSION['admin']=='true'){
  echo "
  <li><a class='waves-effect white-text' href='redirect.php?profile_session=all&pagead=profile&foodslide=false'><i class='material-icons white-text'>assignment_ind</i>Funcionários</a></li>
  <li><a class='waves-effect white-text' href='redirect.php?pagead=1&foodslide=false'><i class='material-icons white-text'>content_paste</i>Comandas</a></li>
<li><a class='waves-effect white-text' href='redirect.php?pagead=06&foodslide=true'><i class='material-icons white-text'>archive</i>Cardápio</a></li>
  <li><a class='waves-effect white-text' href='redirect.php?pagead=3&foodslide=false'><i class='material-icons white-text'>archive</i>Adicionar ao Cardápio</a></li>
  <li><a class='waves-effect white-text' href='redirect.php?pagead=8&foodslide=false'><i class='material-icons white-text'>people_outline</i>Ranking</a></li>
  ";
};
?>

<?php
if($_SESSION['admin']=='false'){

  echo"
  <li><a class='waves-effect white-text' href='redirect.php?pagefu=1&foodslide=true'><i class='material-icons white-text'>local_library</i>Cardápio</a></li>
  ";

};
?>
  </ul>
<?php
if(isset($_SESSION['slide'])){
  if($_SESSION['slide']=='true'){
?>

    <ul id='slide-out2' class='side-nav' style='background-color:white; width:80%;'>
    <div id='slide-out2_ajax'>
    </div>
    <script>
    var myRequest = new XMLHttpRequest();
    myRequest.open('GET', 'inc/employers/employers_select/side_select.php');
    myRequest.onreadystatechange = function () {
    if (myRequest.readyState === 4) {
    document.getElementById('slide-out2_ajax').innerHTML = myRequest.responseText;
                                  }
                                             };
    $(document).ready(function side_show(){
     myRequest.send();
     document.getElementById('reveal').style.display = 'none';
                       });

                       setInterval(function side_show(){
                $('#slide-out2_ajax').load('inc/employers/employers_select/side_select.php');
             }, 2000) /* time in milliseconds (ie 2 seconds)*/

    </script>
<?php
          include 'inc/employers/insert.php';
?>
   </ul>
<?php
}
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
