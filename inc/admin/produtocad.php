
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
		<option value="<?php echo $cat['id'];?>"><?php echo $cat['name'];?></option>
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
	<form action='delete.php?catdel="<?php echo $cat['name']; ?>"' method="post">
						<?php echo $cat['name'];?>
	        <input type="hidden" name="name" value="<?php echo $cat['name']; ?>">
	        <input type="submit" name="submit" value="Delete">
	    </form> <br>
	<?php
	}
	?>
	<form method="post">
		<input type='text' name='add' />
		<input type='submit'/>
	</form>
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

<script>
$(document).ready(function() {
    $('#a').material_select();
});
</script>
<style type="text/css">
	.container{
		position: absolute;
		margin-top: 2%;
		margin-left: 2%;
		border-radius: 2px;
	}
</style>
