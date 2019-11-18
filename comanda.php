


<?php require_once 'config.php'; ?>
<?php require_once 'inc/database.php'; ?>
<?php     include 'inc/sidemenu.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
     }

     if($_SESSION['admin']=='true'){
         if(!isset($_SESSION['pagead'])){
             $_SESSION['pagead']='7';
         }
if($_SESSION['pagead']=='1'){
    include('inc/admin/pedidos.php');
}
elseif($_SESSION['pagead']=='2'){
    include('inc/admin/funcionarios.php');
}
elseif($_SESSION['pagead']=='3'){
    include('inc/admin/produtocad.php');
}
elseif($_SESSION['pagead']=='4'){
    include('inc/admin/usuariocad.php');
}
elseif($_SESSION['pagead']=='5'){
    include('inc/admin/estoque.php');
}
elseif($_SESSION['pagead']=='profile'){
    include('inc/profile.php');
}
elseif($_SESSION['pagead']=='6'){
    include('inc/admin/shoppingcart.php');
}
elseif($_SESSION['pagead']=='7'){
    include('inc/admin/homead.php');
}
     }
     else{
       echo "<script>window.location.href = 'index.php'</script>";
     }
?>

<div id="modal" class="modal modal-fixed-footer">
  <div class="modal-content">
<div class="container">

  <body>



  	<div>
  		<form method="post" enctype="multipart/form-data">

  			<div class="col s12">
  					Nome do produto <input type="text" name="productname" class="productname" required="" placeholder="Digite o nome do produto aqui.">
  			</div>
  			<div class="input-field col s6">
  				Preço do produto <input type="number" name="productval" class="productval" required="" placeholder="Digite aqui o valor em que o produto será cobrado.">
  			</div>

  			<div class="input-field col s12">
  			<select name="category" class="col s6" style="display:initial;">
  			<option value='' disabled selected>Selecione uma categoria</option>
  <?php
  $categoryselect = $mysqli->query('SELECT * FROM category');
  	while($cat = mysqli_fetch_array($categoryselect))
  	{
  	?>
  		<option value="<?php echo $cat['id'];?>"><?php echo utf8_encode($cat['name']);?></option>
  <?php
  	};
  ?>
  			</select>
  			</div>

  			<div class="file-field input-field">
        			<div class="btn">
          			<span>Imagem</span>
          			<input type="file" name="fileUpload">
        			</div>
        			<div class="file-path-wrapper">
          			<input class="file-path validate" type="text" required="">
        			</div>
      		</div>
      		<button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar Produto</button>
  		</form>
  		<a href="foodlist.php"><button class="btn waves-effect waves-light" name="action">Voltar ao Cardápio</button></a>
  	</div>

  	<?php
  	$categoryselect = $mysqli->query('SELECT * FROM category');
  		while($cat = mysqli_fetch_array($categoryselect))
  		{
  			?>
  	<form action='delete.php?catdel="<?php echo utf8_encode($cat['name']); ?>"' method="post">
  						<?php echo utf8_encode($cat['name']);?>
  	        <input type="hidden" name="name" value="<?php echo utf8_encode($cat['name']); ?>">
  	        <input type="submit" name="submit" value="Delete">
  	    </form> <br>
  	<?php
  	}
  	?>

  </body>
  <?php

  	if(isset($_POST['add'])){
  		$catname = $_POST['add'];
  		$addcat = $mysqli->query("INSERT INTO category VALUES (null, '".$catname."', '".$_SESSION['userid']."')");
  	}

  	if(isset($_FILES['fileUpload'])){
  		date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
  		$path = $_FILES['fileUpload']['name'];
  		$ext = pathinfo($path, PATHINFO_EXTENSION);
  		 //Pegando extensão do arquivo
  		$new_name = date("Y.m.d-H.i.s") .".". $ext; //Definindo um novo nome para o arquivo
  		$dir = 'inc/img/uploads/menu/'; //Diretório para uploads

  		move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
  		$direct= $dir.$new_name;
  		$name= $_POST['productname'];
  		$desc= $_POST['productdesc'];
  		$value= $_POST['productval'];
  		$category= $_POST['category'];
  		$insert= "INSERT INTO foodmenu VALUES (null,'".$name."','".$direct."','".$value."','".$category."','".$_SESSION['userid']."','null','null')";
  		if(!$mysqli->query($insert)){
  			echo "$mysqli->error";
  		}
  		else{
  			echo '<script>window.location="comanda.php"</script>';
  		}
  	}//Fazer upload do arquivo
  	else{
  		echo $mysqli->error;
  	}
  ?>

</div>
</div>
<div class="modal-footer">
  <form method="post">
    <input type='text' name='add' />
    <input type='submit'/>
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
  </form>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
 var elems = document.querySelectorAll('.modal');
 var instances = M.Modal.init(elems);
});
</script>

<!--*****************************************************************************************************************************************************************************************
***************************************************************************************************************************************************************************************
***********************************************************************************************************************************************************************************-->

<div id="modalfun" class="modal modal-fixed-footer">
  <div class="modal-content">
<div class="container">
<div class="row">
    <form method="post" enctype="multipart/form-data">
      <div class="col s6 m6">Nome:<input type="text" name="username" placeholder="Digite seu nome aqui." required=""></input></div>
      <div class="col s6 m6">E-mail:<input type="text" name="useremail" placeholder="Digite seu e-mail aqui." required=""></input></div></p>
      <div class="col s12 m12"><SPAN>Tipo de usuário:</SPAN></br>
        <label>
              <input class="with-gap" name="usertype" type="radio" value='10' checked />
              <span>Funcionário</span>
            </label>
          <label>
              <input class="with-gap" name="usertype" type="radio" value='11'/>
              <span>Administrador</span>
          </label></p></div>
      <div class="col s6 m6">Número de telefone:<input type="text" name="userphone" placeholder="Digite o seu numéro para contato." required=""></input></p></div>
      <div class="col s6 m6">Descrição: <input type="text" name="description" placeholder="Faça uma breve descrição" required=""></p></div>
      <div class="col s12 m12">Senha:<input type="password" name="userpassword" placeholder="Digite sua senha aqui." required=""></p></div></p>
      </div>
      <div class="file-field input-field">
            <div class="btn">
              <span>Imagem</span>
              <input type="file" name="fileUpload">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" required="">
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar Funcionario</button>
    </form>
  </div>
</div>
<div class="modal-footer">
  <form method="post">
    <input type='text' name='add' />
    <input type='submit'/>
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
  </form>
</div>
</div>
<?php

if (isset($_FILES['fileUpload'])) {

date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

$path = $_FILES['fileUpload']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$new_name = $_POST['username'] .".". $ext; //Definindo um novo nome para o arquivo
$dir = 'inc/img/uploads/perfil/'; //Diretório para uploads
move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
$direct= $dir.$new_name;
if(isset($_POST['usertype'])) {
  $name= $_POST['username'];
  $usertype= $_POST['usertype'];
  $email= $_POST['useremail'];
  $phone= $_POST['userphone'];
  $password= $_POST['userpassword'];
  $description= $_POST['description'];

  //mysql insert//
  $userinsert= "INSERT INTO accounts VALUES (NULL, '$name','$direct', '$email', '$phone', '$description', '$password', '$usertype,', '".$_SESSION['userid']."')";
  if ($mysqli->query($userinsert) === TRUE) {
  } else {
      echo "Error: " . $userinsert . "<br>" . $mysqli->error;
  }
}
}
?>


<?php include(FOOTER_TEMPLATE); ?>
