<?php
session_start();
$_SESSION['pagead']=$_GET['pagead'];
$_SESSION['pagefu']=$_GET['pagefu'];
$_SESSION['category']=$_GET['cat'];
$_SESSION['profile_id']=$_GET['profile_id'];
$_SESSION['profile']=$_GET['profile_session'];
echo "<html><script>window.location.href = 'index.php'</script><html>";
?>
