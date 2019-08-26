<body>
	<div class="container">
		<form method="post">
			<div class="input-field">
				<label for="newname">Nome</label><input type="text" name="newname" required="">
			</div>
			<div class="input-field">
				<label for="newprice">Preço</label><input type="number" name="newprice" >
			</div>
			<div class="input-field">
				<label for="newdesc">Descrição</label><input type="text" name="newdesc">
			</div>
		    <div class="file-field input-field">
		    	<div class="btn">
		        	<span>File</span>
		        	<input type="file" name="fileUpload" multiple>
		      	</div>
		      	<div class="file-path-wrapper">
		        	<input class="file-path validate" type="text" placeholder="Upload one or more files">
		      	</div>
		    </div>
		    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    			<i class="material-icons right">send</i>
  			</button>
		</form>
	</div>
</body>
<?php 

if (session_status() == PHP_SESSION_NONE) {
	session_start();
	 }
	
	if(!isset($_SESSION['admin'])){
		header('Location: index.php');
	
	}
	elseif($_SESSION['admin']=='false'){
		header('Location: index.php');
	}

	if(isset($_POST['newname'])){
		$update="UPDATE `foodmenu` SET `name` = 'Galinho morta' WHERE `foodmenu`.`id` = 1002";
		if ($mysqli->query($update) === TRUE) {
	    echo "Nome alterado";
		} else {
	    	echo "Error updating record: " . $mysqli->error;
		}
		if (isset($_POST['newprice'])) {
			$update1= "UPDATE `foodmenu` SET `price` = '13.80' WHERE `foodmenu`.`id` = 1002";
			if ($mysqli->query($update1) === TRUE) {
				echo "Preço Alterado";
			}
		}
		if (isset($_POST['newdesc'])){
			$update2 = "UPDATE `foodmenu` SET `promodesc`='Gordurosa' WHERE `foodmenu`.`id`= 1002";
			if ($mysqli->query($update2)=== TRUE){
				echo "Descrição alterada";
			}
		}
		header('location:foodmenuupdate.php');
	}
?>