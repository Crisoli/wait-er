

<?php
session_start();
if ($_SESSION['codigodesamedata'] == 1){
  echo "
<div class='alert alert-danger' role='alert'>			
<p><strong>ERRO:</strong>Seu usuario e/ou sua senha esta incorreto.</p>		
</div>";
session_destroy();
}

?>
  <?php if ($_SESSION['codigodesamedata'] == 2){
      echo "
<div class='alert alert-danger' role='alert'>			
<p><strong>ERRO:</strong>Ja existe uma conta registrada com esse nome de usuario.</p>		
</div>";
     
session_destroy();}
      
   ?>
   
