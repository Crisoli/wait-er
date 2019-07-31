<?php
mysqli_report(MYSQLI_REPORT_STRICT);

$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
return $mysqli;
if(mysqli_connect_errno()){
	echo $mysqli -> mysql_error();
}
echo UPLOADSPATH.'<BR>';
echo ABSPATH.'<BR>';
echo IMGPATH.'<BR>';
?>
