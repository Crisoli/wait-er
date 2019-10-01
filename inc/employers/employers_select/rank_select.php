<?php
$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
?>

<?php

$rankcount = $mysqli->query("SELECT COUNT(*),starter_id FROM requests_numbers GROUP BY starter_id ORDER BY COUNT(*) DESC");
while($count = mysqli_fetch_array($rankcount))
{
$nameinrank = $mysqli->query("SELECT * FROM accounts WHERE id = '".$count['starter_id']."'");
while($name = mysqli_fetch_array($nameinrank))
{
?>

<?php  echo $name['id']; ?>
<?php  echo $name['username']; ?>
<?php  echo $count['COUNT(*)']; ?>
<?php  echo "<br>"; ?>

  <?php
}
  }
  ?>
