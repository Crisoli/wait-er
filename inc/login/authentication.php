
<?php
if(isset($_POST['username']) && isset($_POST['password'])){
$user= $_POST['username'];
$password= $_POST['password'];
$loginquery = $mysqli->query("SELECT * FROM accounts WHERE username='".$user."' and password='".$password."'");
$rowcount = mysqli_num_rows($loginquery);
if($rowcount == 1){
		while ($row = $loginquery->fetch_assoc()) {
			session_start();
			$loggeduser=  $_SESSION['username'] = $user;
			$usertype = $row['usertype'];
					}
			if($usertype==11){
			//header('');
			$_SESSION['admin']=true;
			}
			elseif($usertype==10){
			header('location:foodlist.php');
			$_SESSION['admin']=false;
			}
}
else {
	$_SESSION['codigodesamedata']=1;
	//header('location:samedata.php');
	echo $user;
	

}
	    }
			?>