<?php
include('inc/database.php');
?>
<!DOCTYPE html>
<html>
<head>
	    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="col s12">
					Nome do produto <input type="text" name="productname" class="productname" required="" placeholder="Digite o nome do produto aqui">
			</div>
			<div class=" col s6">
				Descrição do produto <input type="text" name="productdesc" class="productdesc" required="" placeholder="Faça uma descrição do produto">
			</div>
			<div class="file-field input-field">
      			<div class="btn">
        			<span>File</span>
        			<input type="file" name="fileUpload">
      			</div>
      			<div class="file-path-wrapper">
        			<input class="file-path validate" type="text">
      			</div>
    		</div>
    		<button class="btn waves-effect waves-light" type="submit" name="action">Submit
  			</button>
		</form>
	</div>
</body>
</html>
<?php
	if (isset($_FILES['fileToUpload'])) {
		$ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
		$new_name = $_POST['fileUpload'].$ext;
		$dir = 'inc/'; //Diretório para uploads
		echo $dir.$new_name;
		move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
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
