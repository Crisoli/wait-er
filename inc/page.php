<?php

if (session_status() == PHP_SESSION_NONE) {
session_start();
 }

if(!isset($_SESSION['admin'])){
  include('inc/login/authentication.php');
  echo "<body>

      <div class='row'>
          <div class='col-12'></div>
      </div>


      <div class='row'>
          <div class='offset-1'>
              <div class='col s12 l10 m10 offset-1 '>
              <div class=''>
                  <div class='row container valign-wrapper'>

                      <img src='inc/img/Waiter.png' class='show-on-large center-align' style='max-width:40%; width:30%;'>
                  </div>
                  <div class='container'>
                      <div class='row'>
                          <!--Caixa de texto-->
                      </div>
                      <form method='post'>
                          <div class='col s12 m5 l5'>
                              <p>
                                  <input type='text' name='username' placeholder='Nome' required>
                              </p>
                              <p>
                                  <input type='password' name='password' placeholder='Senha' id='password' required class='' required>
                              </p>
                              <!--Botão-->
                                  <input type='submit' class:'' style=' border: none; border-radius: 60%; width:50px; height:50px; background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%); font-color:white;' value='>'></input>
                              <!--  -->
                              </p>
                          </div>
                  </div>
                  </div>
              </div>
          </div>

                <div class='container'>
              <div class='row container valign-wrapper'>

                    <div class='hide-on-small-only'>
                    <img src='inc/img/teste2.jpeg' class=' w-100 p-100'>
                    </div>

                  </div>
              </div>
          </div>


      </form>
  </body>";
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
