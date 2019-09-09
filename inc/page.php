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
#wallpa{
    background-image:url(img/wallpa.png);
 }
 .card{
  column-break-inside: avoid;
  .card {
    display: inline-block;
    overflow: visible;
  }
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
                    <div class="col-12"></div>
                </div>



    <div class="row">

                  <div class="col s12 m4 l4 offset-l2">
                  <div class="card-panel z-depth-1" style=" position: relative; left: 22px; height:500px">
                          <form method="post">

                            <div class="row">
                                <div class="col-12"></div>
                            </div>

                            <div class="row">
                                <div class="col-12"></div>
                            </div>
                            <div class="hide-on-small-only">
                            <div class="row">
                                <div class="col-12"></div>
                            </div>
                            </div>

                            <div class="center-align">
                            <h3>Login</h3>
                            </div>

                                    <div class="col s12 m5 l10 offset-l1">
                                          <div class="center-align">
                                  <p>
                                      <input type="text" name="username" placeholder="Nome" required>
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
                                      </div>

                                  <div class="row">
                                      <div class="col-12"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-12"></div>
                                  </div>

                                        <div class="center-align">
                                        <input type='submit' class="" ; style="border:none;
                                        background-color:#44c767;
                                        background-color:transparent;
                                      	-moz-border-radius:17px;
                                      	-webkit-border-radius:17px;
                                      	border-radius:17px;
                                      	border:3px solid black;
                                      	display:inline-block;
                                      	cursor:pointer;
                                      	color:#ffffff;
                                      	font-family:Arial;
                                      	font-size:20px;
                                        color: black;
                                      	padding:15px 76px;
                                      	text-decoration:none;
                                        " value="Entrar"></input>

                                </form>
                                </div>
                                 </div>
                               </div>
                                           <div class="hide-on-small-only">
                                           <div class="col m4 l3" >
                                           <div class="card-panel black"  style="height:500px">
                                             <img src="inc/img/waiterlogo.png" style="height:284px; position: relative; left: -70px; top:85px;">
                                           </div>
                                           </div>
                                           </div>

        </div>

                                  <div class="row">
                                      <div class="col-12"></div>
                                  </div>


      </div>



</body>
