<?php
$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
?>

<form method="post">

<?php
if (isset($_POST['submit']))
{
$_SESSION['obs']             = $_POST['obs'];
$_SESSION['table']           = $_POST['table'];
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d', time());
$hour= date('h:i:s', time());
$request_create = $mysqli->query("INSERT INTO requests_numbers VALUES (null, '" . $_SESSION['total'] . "','Pendente','" . $_SESSION['obs'] . "','" . $_SESSION['table'] . "','" . $date . "','" . $hour . "','1',null,null,null)");
$request        = $mysqli->query("SELECT id FROM requests_numbers ORDER BY id DESC LIMIT 1");
while ($rowid = mysqli_fetch_array($request))
{
  $lastid = $rowid['id'];
}
foreach ($_SESSION["shopping_cart"] as $key => $values)
{
  $item_id              = $values['item_id'];
  $item_quantity        = $values['item_quantity'];
  $shopping_cart_insert = $mysqli->query("INSERT INTO requests VALUES (null, '" . $item_id . "', '" . $item_quantity . "','" . $lastid . "')");
}

}

?>
<select placeholder='Numero da Mesa' name='table' class="browser-default">

<?php
$tablesreq = $mysqli->query("SELECT * FROM tables");
while ($rowtable = mysqli_fetch_array($tablesreq))
{
echo utf8_encode('<option value=' . $rowtable['table_number'] . '>' . $rowtable['table_number'] . ' - ' . $rowtable['size'] . ' - ' . $rowtable['status'] . '</option>');

}
?>
</select>
<input type="text" name="obs" placeholder="Observações"> </input>
<input type="submit" name="submit"></input>
</form>
