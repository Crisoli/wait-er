<?php
mysqli_report(MYSQLI_REPORT_STRICT);
session_start();

$HOST = 'localhost';
$DB_USERNAME = 'cristian081';
$DB_PASS = '';
$DB_NAME = 'wait-er';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
return $mysqli;
if(mysqli_connect_errno()){
	echo $mysqli -> mysql_error();
}
echo UPLOADSPATH.'<BR>';
echo ABSPATH.'<BR>';
echo IMGPATH.'<BR>';
?>