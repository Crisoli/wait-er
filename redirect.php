<?php
session_start();
$_SESSION['pagead']=$_GET['pagead'];
$_SESSION['pagefu']=$_GET['pagefu'];
$_SESSION['category']=$_GET['cat'];
echo "<html><script>window.location.href = 'index.php'</script><html>";
?>
