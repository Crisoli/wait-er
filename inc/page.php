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

                      <img src='inc/img/Waiter.png' class='w-100 p-100 show-on-large'>
                  </div>
                  <div class='container'>
                      <div class='row'>
                          <!--Caixa de texto-->
                      </div>
                      <form method='post'>
                          <div class='input-field inline col s12 l12'>
                              <p>
                                  <input type='text' name='username' placeholder='Nome' required>
                              </p>
                              <p>
                                  <input type='password' name='password' placeholder='Senha' id='password' required class='' required>
                              </p>
                              <!--Botão-->
                              <a class='btn-floating' style='background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);'>
                                  <i class='large material-icons'>chevron_right</i>
                                  <input type='submit' value='Login'></input>
                              </a>
                              <!--  -->
                              </p>
                          </div>
                  </div>
                  </div>
              </div>
          </div>

          <div class='col s12 l5 m2 d-none d-xl-block show-on-large'>
                <div class='container'>
              <div class='row container valign-wrapper'>


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
