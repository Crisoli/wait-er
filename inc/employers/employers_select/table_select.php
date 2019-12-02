<?php
$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
session_start();
?>
<div class="row">
<div class="col s10 m10 l10 offset-l1 offset-s1">
<select placeholder='Numero da Mesa' readonly value="<?php echo $_SESSION['nmesa']?>" name='table' class="browser-default">
<?php
echo '<option value=' . $_SESSION['nmesa'] . '>' . $_SESSION['nmesa'] . ' - ' . $_SESSION['tmesa'] . '</option>';
?>
</select>
</div>
</div>
