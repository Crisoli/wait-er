


<?php
if(isset($_POST['username']) && isset($_POST['password'])){
$user= $_POST['username'];
$password= $_POST['password'];
$loginquery = $mysqli->query("SELECT * FROM accounts WHERE username='".$user."' and password='".$password."'");
$rowcount = mysqli_num_rows($loginquery);
if($rowcount == 1){
	session_start();
		while ($row = $loginquery->fetch_assoc()) {
			$_SESSION['img'] = $row['img'];
			$_SESSION['username'] = $row['username'];
			$usertype = $row['usertype'];
			$_SESSION['userid'] = $row['id'];
					}
			if($usertype==11){
			$_SESSION['admin']='true';
			header('location:comanda.php');
			}
			elseif($usertype==10){
			$_SESSION['admin']='false';
			header('location:foodlist.php');
			}
}
else {
	echo "
	<div class='alert alert-danger' role='alert' id='deletesuccess' >
	<p><div class='card-panel #f44336 red white-text' style='position:absolute' id='deletesuccess' ><strong>ERRO:</strong>Seu usuario e/ou sua senha esta incorreto. </div></p>
	</div>";
}
	    }
			?>
<script>

	$(document).ready( function() {
		$('#deletesuccess').delay(1000).fadeOut();
	});
</script>

</script>
