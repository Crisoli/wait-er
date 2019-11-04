
<?php

//Define the query
$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
$query = $mysqli->query("DELETE FROM category WHERE name=".$_GET['catdel']." LIMIT 1");

//sends the query to delete the entry

if ($query) {
//if it updated
?>

            <strong>Contact Has Been Deleted</strong> <button onclick="sendtoindex()"> <br /><br />

            <script>
            function sendtoindex() {
              window.location.href = 'index.php';
            }
            </script>


<?php
 } else {
//if it failed
?>

            <strong>Deletion Failed</strong><br /><br />


<?php
}
?>
