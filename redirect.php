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
$_SESSION['nmesa']=$_GET['nmesa'];
$_SESSION['tmesa']=$_GET['tmesa'];

echo "<html><script>window.location.href = 'index.php'</script><html>";
?>
