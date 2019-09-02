<?php
session_start(); 
$_SESSION['pagead']=$_GET['pagead'];
echo "<html><script>window.location.href = 'index.php'</script><html>";
?>