
<!--
<a id='Esses 3 botões são para mudar o $_SESSION e so vai ficar aqui enquanto eu não terminar a pagina'
 href='redirect.php?profile_id=6&profile_session=specific&pagefu=profile&pagead=profile'>(1)Pagina do funcionario (Admin que vizualiza essa pagina)</a><br>
 <a id='Esses 3 botões são para mudar o $_SESSION e so vai ficar aqui enquanto eu não terminar a pagina'
  href='redirect.php?profile_session=all&pagefu=profile&pagead=profile'>(2)Pagina que leva pros profile dos funcionarios (Admin que vizualiza essa pagina)</a><br>
 <a id='Esses 3 botões são para mudar o $_SESSION e so vai ficar aqui enquanto eu não terminar a pagina'
  href='redirect.php?profile_session=my&pagefu=profile&pagead=profile'>(3)Pagina do funcionario/admin (Funcionario/admin que vizualiza essa pagina e você precisa ter logado antes de vir pra essa pagina)</a><br>
---->


  <!--- Perfil individual ---->

<?php
if($_SESSION['profile'] == 'my')
{
$profile = $mysqli->query('SELECT * FROM accounts WHERE id = '.$_SESSION['userid'].'');
while($pro = mysqli_fetch_array($profile)){
?>
<div id='Aqui aparece a conta do funcionario/admin que quer vizualizar o próprio profile'>
<div class="center-align">
<div class="row" style="padding-top:6%;">
  <div class="col s12 m5 l6 offset-l3 offset-m3">
    <div class="card, N/A transparent"
    <?php if ($pro['usertype'] == 11){
    ?>
    style="background:
    border: none;
    border-radius: 5px;
    height:60%;
    "
    <?php
    }
    elseif ($pro['usertype'] == 10){
      ?>
      style="
      border: none;
      border-radius: 5px;
      height:60%;"
      <?php
      echo 'Funcionário';
    }
    else {

    }
      ?>
    >
    <div class="col s12 m5 l6">
    <div class="hide-on-small-only">
<img src="<?php echo $pro['img']; ?>" style="margin-left:-11%; margin-top: -0.1%; width:105%; height:100%; object-fit: cover;
-webkit-clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 0 51%, 0% 0%);">
    </div>

<div class="hide-on-med-and-up">
  <div class="center-align">
<img src="<?php echo $pro['img']; ?>" class="circle" style=" margin-top: -0.1%; width:100px; height:100px; object-fit: cover;">
  </div>
</div>

    </div>
  <div class="col s12 m5 l5">
<div class="center-align">
<h3 class="black-text">
<?php echo  utf8_encode($pro['username']); ?>
</h3>
<p><h5 class="blue-text"><?php if ($pro['usertype'] == 11){
echo 'Admin';
}
elseif ($pro['usertype'] == 10){
  echo 'Funcionário';
}
else {

}
?></h5></p>
<p><h6> <strong>Email</strong></h6><h6><?php echo  utf8_encode($pro['email']); ?></h6></p>
<p><h6> <strong>Telefone</strong></h6><h6><?php echo  utf8_encode($pro['phonenumber']); ?></h6></p>
<p><h6> <strong>Descrição</strong></h6><h6><?php echo  utf8_encode($pro['description']); ?></h6></p>
<p><h6> <strong>Senha</strong></h6><h6><?php echo  utf8_encode($pro['password']); ?></h6></p>

</div>
</div>
</div>
</div>

<?php
}
?>
</div>
</div>
</div>
<?php
}
?>
<!--- Lista de funcionário ---->
<div class="row">
<div class="col s12 m12 l12">
<?php
if($_SESSION['profile'] == 'all')
{
$profile = $mysqli->query('SELECT * FROM accounts');
?>

<button data-target='modalfun' class='btn-floating btn-large modal-trigger circle red' style="position:absolute; position:fixed; right:1%; bottom:2%;"><i class="material-icons">add</i></button>

<?php
while($pro = mysqli_fetch_array($profile)){
?>
<div id='Aqui aparece as conta tudo, só o admin pode acessar'>




        <div class="col s12 m5 l4">
        <div class="card"
        <?php if ($pro['usertype'] == 11){
        ?>
        style="background: -webkit-gradient(linear, left top, left bottom,
        color-stop(50%,#5433FF),
        color-stop(50%,white));
        border: none;
        border-radius: 5px;
        height:50%;"
        <?php
        }
        elseif ($pro['usertype'] == 10){
          ?>
          style="background: -webkit-gradient(linear, left top, left bottom,
          color-stop(50%,#20BDFF),
          color-stop(50%,white));
          border: none;
          border-radius: 5px;
          height:50%;"
          <?php
          echo 'Funcionário';
        }
        else {

        }
          ?>
          >
        <div class="center-align" style="padding-top:25%;">
        <a href='redirect.php?profile_id=<?php echo $pro['id']; ?>&profile_session=specific&pagefu=profile&pagead=profile'>
        <img src="<?php echo $pro['img']; ?>" style="width:150px; height:150px; object-fit:cover;
        polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);"
        class="circle ">
        </div>
        </a>
        <a href='redirect.php?profile_id=<?php echo $pro['id']; ?>&profile_session=specific&pagefu=profile&pagead=profile'
        class="black-text">

        <div class="center-align">
        <h5>
         <?php echo  utf8_encode($pro['username']);?>
        </h5>
        <?php if ($pro['usertype'] == 11){
        ?>

        <?php
        echo 'Admin';
        }
        elseif ($pro['usertype'] == 10){
          echo 'Funcionário';
        }
        else {

        }
          ?>
        </div>


        </a>
        </div>
        </div>

<a id='Aqui vai aparecer o bagulho pra levar pros profile dos funcionario que só os admin pode ver'
 href='redirect.php?profile_id=<?php echo $pro['id']?>&profile_session=specific'></a>
</div>
<?php
}
?>
</div>

</div>
<?php
}
?>

<!--- Perfil escolhido ---->
<?php
if($_SESSION['profile'] == 'specific')
{
$profile = $mysqli->query('SELECT * FROM accounts WHERE id = '.$_SESSION['profile_id'].'');
while($pro = mysqli_fetch_array($profile)){
  ?>
  <div class="center-align">
  <div class="row" style="padding-top:6%;">
    <div class="col s12 m5 l6 offset-l3 offset-m3">
      <div class="card"
      <?php if ($pro['usertype'] == 11){
      ?>
      style="background:
      border: none;
      border-radius: 5px;
      height:60%;"
      <?php
      }
      elseif ($pro['usertype'] == 10){
        ?>
        style="
        border: none;
        border-radius: 5px;
        height:60%;"
        <?php
        echo 'Funcionário';
      }
      else {

      }
        ?>
      >
      <div class="col s12 m5 l6">
      <div class="hide-on-small-only">
  <img src="<?php echo $pro['img']; ?>" style="margin-left:-11%; margin-top: -0.1%; width:105%; height:100%; object-fit: cover;
  -webkit-clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 0 51%, 0% 0%);">
      </div>
      </div>
    <div class="col s12 m5 l5">
  <div class="center-align">
  <h3 class="black-text">
  <?php echo  utf8_encode($pro['username']); ?>
  </h3>
  <p><h5 class="blue-text"><?php if ($pro['usertype'] == 11){
  echo 'Admin';
  }
  elseif ($pro['usertype'] == 10){
    echo 'Funcionário';
  }
  else {

  }
  ?></h5></p>
  <p><h6> <strong>Email</strong></h6><h6><?php echo  utf8_encode($pro['email']); ?></h6></p>
  <p><h6> <strong>Telefone</strong></h6><h6><?php echo  utf8_encode($pro['phonenumber']); ?></h6></p>
  <p><h6> <strong>Descrição</strong></h6><h6><?php echo  utf8_encode($pro['description']); ?></h6></p>
  <p><h6> <strong>Senha</strong></h6><h6><?php echo  utf8_encode($pro['password']); ?></h6></p>

  </div>
  </div>
  </div>
  </div>

  <?php
  }
  ?>
  </div>
  </div>
  </div>
  <?php
  }
  ?>
