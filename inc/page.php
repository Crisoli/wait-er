<?php
   include('inc/login/authentication.php');
   include('inc/login/samedata.php');
if(!isset($_SESSION['admin'])){
  echo "<body>

      <div class='row'>
          <div class='col-12'></div>
      </div>
      <div class='row'>
          <div class='col-12'></div>
      </div>

      <div class='row'>
          <div class='offset-1'>
              <div class='col s12 l10 m10 offset-1 '>
              <div class=''>
                  <div class='row container valign-wrapper'>

                      <img src='inc/img/Waiter.png' class='w-100 p-100'>
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
                              <a class='btn-floating waves-effect waves-dark green-gray darken-3 center'>
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

          <div class='col s12 l5 m2 d-none d-sm-block'>
                <div class='container'>
              <div class='row container valign-wrapper'>


                    <img src='inc/img/teste2.jpeg' class=''>
                  </div>
              </div>
          </div>
      </div>

      </form>
  </body>";
}
else{echo "string";
  if ($_SESSION['admin'] == 'true') {
    echo "top";
  }
  elseif ($_SESSION['admin'] == 'false') {
    echo "toptopzera";
  }
  else {
  echo '<h1>Um erro MUITO inesperado aconteceu (Como se conseguiu encontrar esse erro?)</h1>';
  }
}

?>
