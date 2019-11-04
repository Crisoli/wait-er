<body>
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
</body>
<?php
if (isset($_FILES['fileUpload'])) {

	date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

	$path = $_FILES['fileUpload']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	$new_name = $_POST['username'] .".". $ext; //Definindo um novo nome para o arquivo
	$dir = 'inc/img/uploads/perfil/'; //Diretório para uploads
	$img= $dir.$new_name;
	move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

	if(isset($_POST['usertype'])) {
		$name= $_POST['username'];
		$usertype= $_POST['usertype'];
		$email= $_POST['useremail'];
		$phone= $_POST['userphone'];
		$password= $_POST['userpassword'];
		$description= $_POST['description'];

		//mysql insert//
		$userinsert= "INSERT INTO accounts VALUES (NULL, '$name','$img', '$email', '$phone', '$description', '$password', '$usertype,', '".$_SESSION['userid']."')";
		if ($mysqli->query($userinsert) === TRUE) {
		} else {
    		echo "Error: " . $userinsert . "<br>" . $mysqli->error;
		}
	}
}
?>
<style type="text/css">
	.container{
		position: absolute;
		margin-left:34%;
		margin-top: 2%;
		border-radius: 2px;
	}
</style>
