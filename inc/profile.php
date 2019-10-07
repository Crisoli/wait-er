
<a id='Esses 3 botões são para mudar o $_SESSION e so vai ficar aqui enquanto eu não terminar a pagina'
 href='redirect.php?profile_id=6&profile_session=specific&pagefu=profile&pagead=profile'>(1)Pagina do funcionario (Admin que vizualiza essa pagina)</a><br>
 <a id='Esses 3 botões são para mudar o $_SESSION e so vai ficar aqui enquanto eu não terminar a pagina'
  href='redirect.php?profile_session=all&pagefu=profile&pagead=profile'>(2)Pagina que leva pros profile dos funcionarios (Admin que vizualiza essa pagina)</a><br>
 <a id='Esses 3 botões são para mudar o $_SESSION e so vai ficar aqui enquanto eu não terminar a pagina'
  href='redirect.php?profile_session=my&pagefu=profile&pagead=profile'>(3)Pagina do funcionario/admin (Funcionario/admin que vizualiza essa pagina e você precisa ter logado antes de vir pra essa pagina)</a><br>
<?php
if($_SESSION['profile'] == 'my')
{
$profile = $mysqli->query('SELECT * FROM accounts WHERE id = '.$_SESSION['userid'].'');
while($pro = mysqli_fetch_array($profile)){
?>
<div id='Aqui aparece a conta do funcionario/admin que quer vizualizar o próprio profile'>
(3)
Codigo vai aqui.
Lembra de abrir PHP e fechar assim que pegar do banco:
<?php echo $pro['description']; ?>
</div>
<?php
}
}


if($_SESSION['profile'] == 'all')
{
$profile = $mysqli->query('SELECT * FROM accounts');
while($pro = mysqli_fetch_array($profile)){
?>
(2)
Codigo vai aqui.
Lembra de abrir PHP e fechar assim que pegar do banco:
<div id='Aqui aparece as conta tudo, só o admin pode acessar'>
  <?php echo $pro['description']; ?>

<a id='Aqui vai aparecer o bagulho pra levar pros profile dos funcionario que só os admin pode ver'
 href='redirect.php?profile_id=<?php echo $pro['id']?>&profile_session=specific'></a>
</div>
<?php
}
}


if($_SESSION['profile'] == 'specific')
{
$profile = $mysqli->query('SELECT * FROM accounts WHERE id = '.$_SESSION['profile_id'].'');
while($pro = mysqli_fetch_array($profile)){
  ?>
  <div id='Aqui aparece a conta do funcionario que o admin quis acessar'>
    (1)
    <?php echo $pro['description']; ?>
  </div>
<?php
}
}
?>
