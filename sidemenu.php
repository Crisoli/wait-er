<!-- JQuery / Materialize CSS + JavaScript imports -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<!-- HTML -->


<div class="row">
  <nav style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);">
     <a href="#" data-activates="slide-out" class="button-collapse show-on-medium-and-up"><i class="material-icons">menu</i></a>
      <a href="#" class="brand-logo center">  <img src='inc/img/Waiterbranco.png' style='max-height:200%; max-width:100px;'> </a>
  </nav>
    <div class="container">

        <ul id="slide-out" class="side-nav " style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);">
        <li><div class="user-view">

          <br><a href="#user"><img class="circle z-depth-2" style="max-height:200%; max-width:70px;" src="<?php session_start(); echo $_SESSION['img'];?>"></a></br>
          <a href="#name"><span class="white-text">Um cara ai</span></a>
          <a href="#email"><span class="white-text">Logoff</span></a>
        </div></li>

         <li><div class="divider black-text"></div></li>

          <li><a class="waves-effect white-text" href="#!"><i class="material-icons white-text">archive</i>Estoque</a></li>


          <li><a class="waves-effect white-text" href="#!"><i class="material-icons white-text">assignment_ind</i>Funcionários</a></li>


          <li><a class="waves-effect white-text" href="#!"><i class="material-icons white-text">content_paste</i>Pedidos</a></li>

          <li><a class="waves-effect white-text" href="#!"><i class="material-icons white-text">local_library</i>Cardápio</a></li>


          <li><a class="waves-effect white-text" href="#!"><i class="material-icons white-text">people_outline</i>Ranking</a></li>
       </ul>


    </div>
</div>

<script type="text/javascript">
	$(".button-collapse").sideNav();
</script>

<script type="text/javascript">
	$(".button-collapse").sideNav();
  $('.button-collapse').sideNav({
      menuWidth: 300, // Normal 300
      edge: 'left', // Definir se o menu vai ficar na direita ou esquerda
      closeOnClick: true, //
      draggable: true, //
      onOpen: function(el) { },
      onClose: function(el) { },
    }
  );

</script>
