
<script>
// 1. create a new XMLHttpRequest object -- an object like any other!
var myRequest = new XMLHttpRequest();
// 2. open the request and pass the HTTP method name and the resource as parameters
myRequest.open('GET', 'inc/employers/employers_select/side_select.php');
// 3. write a function that runs anytime the state of the AJAX request changes
myRequest.onreadystatechange = function () {
// 4. check if the request has a readyState of 4, which indicates the server has responded (complete)
if (myRequest.readyState === 4) {
// 5. insert the text sent by the server into the HTML of the 'ajax-content'
document.getElementById('slide-out2_ajax').innerHTML = myRequest.responseText;
                              }
                                         };
$(document).ready(function side_show(){
 myRequest.send();
 document.getElementById('reveal').style.display = 'none';
                   });

                   setInterval(function side_show(){
            $('#slide-out2_ajax').load('inc/employers/employers_select/side_select.php');
         }, 2000) /* time in milliseconds (ie 2 seconds)*/

</script>
<a id='Esses 3 botões são para mudar o $_SESSION e so vai ficar aqui enquanto eu não terminar a pagina'
 href='redirect.php?profile_id=6&profile_session=specific'>(1)Pagina do funcionario (Admin que vizualiza essa pagina)</a><br>
 <a id='Esses 3 botões são para mudar o $_SESSION e so vai ficar aqui enquanto eu não terminar a pagina'
  href='redirect.php?profile_session=all'>(2)Pagina que leva pros profile dos funcionarios (Admin que vizualiza essa pagina)</a><br>
 <a id='Esses 3 botões são para mudar o $_SESSION e so vai ficar aqui enquanto eu não terminar a pagina'
  href='redirect.php?profile_session=my'>(3)Pagina do funcionario/admin (Funcionario/admin que vizualiza essa pagina e você precisa ter logado antes de vir pra essa pagina)</a><br>
<?php
session_start();
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
