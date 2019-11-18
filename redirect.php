<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
$_SESSION['pagead']=$_GET['pagead'];
$_SESSION['pagefu']=$_GET['pagefu'];
$_SESSION['category']=$_GET['cat'];
$_SESSION['profile_id']=$_GET['profile_id'];
$_SESSION['profile']=$_GET['profile_session'];
$_SESSION['slide']=$_GET['foodslide'];
echo "<html><script>window.location.href = 'index.php'</script><html>";
?>
