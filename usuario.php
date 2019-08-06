<?php
$connect = new mysqli('localhost', 'root', 'usbw', 'waiter');
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		Nome:<input type="text" name="username" placeholder="Digite seu nome aqui." required=""></input></p>
		<label>Tipo de usuário:</label></br>
			Administrador<input type="radio" name="usertype" value="10">
			Gerente<input type="radio" name="usertype" value="9">
			Funcionário<input type="radio" name="usertype" value="8"></p>
		E-mail:<input type="text" name="useremail" placeholder="Digite seu e-mail aqui." required=""></input></p>
		Número de telefone:<input type="number" name="userphone" placeholder="Digite o seu numéro para contato." required=""></input></p>
		Descrição: <input type="text" name="description" placeholder="Faça uma breve descrição" required=""></p>
		Senha:<input type="pasword" name="userpassword" placeholder="Digite sua senha aqui." required="">
		<input type="submit" name="">	
	</form>

</body>
</html>
<?php
	if(isset($_POST['usertype'])) {
		$name= $_POST['username'];
		$usertype= $_POST['usertype'];
		$email= $_POST['useremail'];
		$phone= $_POST['userphone'];
		$password= $_POST['userpassword'];
		$description= $_POST['description'];
		//mysql insert//
		$userinsert= "INSERT INTO `accounts` (`id`, `username`, `email`, `phonenumber`, `description`, `password`, `usertype`, `creator_id`) VALUES (NULL, '$name', '$email', '$phone', '$description', '$password', '$usertype,', '1');";
		if ($connect->query($userinsert) === TRUE) {
		    echo "New record created successfully";
		} else {
    		echo "Error: " . $userinsert . "<br>" . $connect->error;
		}
	}
?>