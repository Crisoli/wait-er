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

<script>
// 1. create a new XMLHttpRequest object -- an object like any other!
var myRequest = new XMLHttpRequest();
// 2. open the request and pass the HTTP method name and the resource as parameters
myRequest.open('GET', 'inc/employers/employers_select/table_select.php');
// 3. write a function that runs anytime the state of the AJAX request changes
myRequest.onreadystatechange = function () {
// 4. check if the request has a readyState of 4, which indicates the server has responded (complete)
if (myRequest.readyState === 4) {
// 5. insert the text sent by the server into the HTML of the 'ajax-content'
document.getElementById('tables_ajax').innerHTML = myRequest.responseText;
                              }
                                         };
$(document).ready(function side_show(){
 myRequest.send();
 document.getElementById('reveal').style.display = 'none';
                   });

                   setInterval(function side_show(){
            $('#tables_ajax').load('inc/employers/employers_select/table_select.php');
         }, 60000) 

</script>
<div id='tables_ajax'>
</div>
<input type="text" name="obs" placeholder="Observações"> </input>
<input type="submit" name="submit"></input>
</form>
