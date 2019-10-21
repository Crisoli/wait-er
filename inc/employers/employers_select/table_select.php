<?php
$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
?>
<div class="row">
<div class="col s10 m10 l10 offset-l1 offset-s1">
<select placeholder='Numero da Mesa' name='table' class="browser-default">
<?php
$tablesreq = $mysqli->query("SELECT * FROM tables where status ='Livre'");
while ($rowtable = mysqli_fetch_array($tablesreq))
{
echo utf8_encode('<option value=' . $rowtable['table_number'] . '>' . $rowtable['table_number'] . ' - ' . $rowtable['size'] . ' - ' . $rowtable['status'] . '</option>');
}
?>
</select>
</div>
</div>
