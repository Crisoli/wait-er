<?php
	include('config.php');
	include('header.php');
 ?>
<body>
	<div class="container">
		<form method="post">
			<div class="input-field">
				<label for="newname">Nome</label><input type="text" name="newname" required="">
			</div>
			<div class="input-field">
				<label for="email">Email</label><input type="text" name="email">
			</div>
			<div class="input-field">
				<label for="newpass">Senha</label><input type="password" name="newpass">
			</div>
			<div class="input-field">
				<label for="newdesc">Descrição</label><input type="text" name="newdesc">
			</div>
			<div class="input-field">
				<label for="newnumb">Telefone</label><input type="number" name="newnumb">
			</div>
			<div class="col s12 m6"><SPAN>Tipo de usuário:</SPAN></br>
				<label>
			        <input class="with-gap" name="newusertype" type="radio" value='13' checked />
			        <span>Funcionário</span>
			    </label>
			    <label>
			        <input class="with-gap" name="newusertype" type="radio" value='11'/>
			        <span>Administrador</span>
			    </label></p></div>
		    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    			<i class="material-icons right">send</i>
  			</button>
		</form>
	</div>
</body>
<?php
	if(isset($_POST['newname'])){
		$update="UPDATE `accounts` SET `username` = 'Galinho morta' WHERE `accounts`.`id` = 7";
	}
		if ($mysqli->query($update) === TRUE) {
	    echo "Nome alterado";
		} else {
	    	echo "Error updating record: " . $mysqli->error;
		}
		if( isset($_POST['email'])){
			$update2= "UPDATE `accounts` SET `email` = 'Galinho morta' WHERE `accounts`.`id` = 7";
		}
			if ($mysqli->query($update2)=== TRUE) {
				echo "email alterado";
			}
			else{
			echo $mysqli->error;
			}

		if( isset($_POST['newnumb'])){
			$update3= "UPDATE `accounts` SET `phonenumber` = 1213141516 WHERE `accounts`.`id` = 7";
		}
			if ($mysqli->query($update3)=== TRUE) {
				echo "Telefone alterado";
			}
			else{
			echo $mysqli->error;
			}

		if( isset($_POST['newpass'])){
			$update4= "UPDATE `accounts` SET `password` = 'guarapari' WHERE `accounts`.`id` = 7";
		}
			if ($mysqli->query($update4)=== TRUE) {
				echo "senha alterado";
			}
			else{
			echo $mysqli->error;
			}

		if( isset($_POST['newdesc'])){
			$update5= "UPDATE `accounts` SET `description` = 'Galinho morta' WHERE `accounts`.`id` = 7";
		}
			if ($mysqli->query($update5)=== TRUE) {
				echo "Descrição alterada";
			}
			else{
			echo $mysqli->error;
			}
	
?>
