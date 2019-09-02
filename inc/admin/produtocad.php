<?php
	mysqli_report(MYSQLI_REPORT_STRICT);

$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
?>
 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<body>
	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="col s12">
					Nome do produto <input type="text" name="productname" class="productname" required="" placeholder="Digite o nome do produto aqui.">
			</div>
			<div class=" col s6">
				Descrição do produto <input type="text" name="productdesc" class="productdesc" required="" placeholder="Faça uma descrição do produto.">
			</div>
			<div class="input-field col s6">
				Preço do produto <input type="text" name="productval" class="productval" required="" placeholder="Digite aqui o valor em que o produto será cobrado.">
			</div>
			<div class="file-field input-field">
      			<div class="btn">
        			<span>File</span>
        			<input type="file" name="fileUpload">
      			</div>
      			<div class="file-path-wrapper">
        			<input class="file-path validate" type="text" required="">
      			</div>
    		</div>
    		<button class="btn waves-effect waves-light" type="submit" name="action">Submit
  			</button>
		</form>
		<a href="foodlist.php"><button class="btn waves-effect waves-light" name="action">Voltar ao Cardápio</button></a>
	</div>
</body>
<?php



	if(isset($_FILES['fileUpload'])){
		date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

		$ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
		$new_name =$_POST['productname'] . $ext; //Definindo um novo nome para o arquivo
		$dir = 'img/uploads/'; //Diretório para uploads

		move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
		$direct= $dir.$new_name;
		$name= $_POST['productname'];
		$desc= $_POST['productdesc'];
		$value= $_POST['productval'];
		$insert= "INSERT INTO foodmenu VALUES (null,'".$name."','".$direct."','".$value."','1','1','1','".$desc."')";
		if(!$mysqli->query($insert)){
			echo "$mysqli->error";
		}
		else{
			header('location:produtocad.php');
		}
	}//Fazer upload do arquivo
	else{
		echo $mysqli->error;
	}
?>
<style type="text/css">
	.container{
		position: absolute;
		margin-top: 2%;
		margin-left: 2%;
		border-radius: 2px;
	}
</style>
