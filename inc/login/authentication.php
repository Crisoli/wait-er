
<?php
if(isset($_POST['username']) && isset($_POST['password'])){
$user= $_POST['username'];
$password= $_POST['password'];
$loginquery = $mysqli->query("SELECT * FROM accounts WHERE username='".$user."' and password='".$password."'");
$rowcount = mysqli_num_rows($loginquery);
if($rowcount == 1){
		while ($row = $loginquery->fetch_assoc()) {
			$loggeduser=  $_SESSION['username'] = $user;
			$usertype = $row['usertype'];
					}
			if($usertype==11){
			session_start();
			$_SESSION['admin']=true;
			//header('');
			}
			elseif($usertype==10){
			session_start();
			$_SESSION['admin']=false;
			header('location:foodlist.php');
			}
}
else {
	session_start();
	$_SESSION['codigodesamedata']=1;
}
	    }
			?>