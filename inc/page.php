<?php

if (session_status() == PHP_SESSION_NONE) {
session_start();
 }

if(!isset($_SESSION['admin'])){
  include('inc/login/authentication.php');
 ?>

<body>
 <style>
body{
background-image: url('inc/img/teste2.png');
background-repeat: no-repeat;
background-size: 100% 100%;
font-color:white;
 }
 .card{
  column-break-inside: avoid;
  .card {
    display: inline-block;
    overflow: visible;
  }
  .card-panel{
  opacity: 0.5;
  }
}
</style>
    <!--- pular coluna ---->
    <!--- ---->
    <div class="hide-on-med-and-down">
    </div>
    <div class="row">
            <div class="col m5 l6 offset-m5" style="">
                          <form method="post">

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
                                <div class="col-12"></div>
                            </div>
                            <div class="row">
                                <div class="col-12"></div>
                            </div>
                            <div class="row">
                                <div class="col-12"></div>
                            </div>
                            <div class="row">
                            </div>
                            <div class="col s12 m12 l7 offset-l8">
                              <div class="card-panel" style="margin-top:-70px;">
                              <div class="col l10 offset-l1">
                                      <div class="center-align">
                                          <img src="inc/img/Waiter.png" style="position:top; max-height:30%; max-width:50%; ">
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

                                  <div class="center-align">
                                  <p>
                                      <input type="text" name="username" class="" placeholder="Nome" required>
                                  </p>

                                  <div class="row">
                                      <div class="col-12"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-12"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-12"></div>
                                  </div>

                                  <p>
                                      <input type="password" name="password" placeholder="Senha" id="password" class="" required>
                                  </p>
                                  </div>
                                      <div class="col-12"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-12"></div>
                                  </div>
                                    <div class="center-align">
                                        <input type='submit' class="" style="border:none;

                                        background-color:#23232e;
                                      	-moz-border-radius:17px;
                                      	-webkit-border-radius:17px;
                                      	border-radius:37px;
                                      	display:inline-block;
                                      	font-family:Arial;
                                      	font-size:15px;
                                        color: white;
                                      	padding:15px 76px;
                                      	text-decoration:none;
                                        " value="Entrar"></input>
                                        </div>
                                      </div>
                                </form>
                                  </div>
                                </div>
                                 </div>

</div>
        </div>
</body>
</html>
 <?php
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
