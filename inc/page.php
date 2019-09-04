<?php

if (session_status() == PHP_SESSION_NONE) {
session_start();
 }

if(!isset($_SESSION['admin'])){
  include('inc/login/authentication.php');
  echo "
      <!--- login aqui ---->
  ";
}
else{
  if ($_SESSION['admin'] == 'true') {
    header('Location: comanda.php');
  }
  elseif ($_SESSION['admin'] == 'false') {
    header('Location: foodlist.php');
  }
  else {
  echo '<h1>Um erro MUITO inesperado aconteceu (Como cê conseguiu encontrar esse erro?)</h1>';
  }
}

?>
<body>
 <style>
 .wallpa{
    background-image:url'(inc/img/wallpa.png)'
 }
</style>
<div class="wallpa">
    <div class="row">
        <div class="col-12"></div>
    </div>

    <div class="row">
        <div class="col-12"></div>
    </div>

        <div class="row">
            <div class="col-12"></div>
        </div>

            <div class="row">
                <div class="col-12"></div>
            </div>

                <div class="row">
                    <div class="col-12"></div>
                </div>


    <div class="row">
        <div class="col s10 m4 l4 offset-s1 offset-m4 offset-l4">
            <div class="card-panel z-depth-1">
                    <form method="post">

                    <div class="center-align">
                      <img src='inc/img/waiterlogo.png' class='' style='
                      width:50%;
                      position: relative;
                      top: -80px;

                      '>
                    </div>
                            <p>
                                <input type="text" name="username" placeholder="Nome" required>
                            </p>
                            <p>
                                <input type="password" name="password" placeholder="Senha" id="password" class="" required>
                            </p>
                                  <input type='submit' class="" ; style="border:none;" value="Entrar"></input>


                                  <div class="row">
                                      <div class="col-12"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-12"></div>
                                  </div>

                    </form>
            </div>
        </div>
        </div>
        </div>



</body>
