
          <form method="post">
          <?php


$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
          
if (!empty($_SESSION["shopping_cart"]))
  {
    $total = 0;
    foreach ($_SESSION["shopping_cart"] as $keys => $values)
      {
?>

               <?php
        echo $values["item_name"];
?>
               <?php
        echo $values["item_quantity"];
?>
               $ <?php
        echo $values["item_price"];
?>
              $ <?php
        echo number_format($values["item_quantity"] * $values["item_price"], 2);
?>
               </a><a href="foodlist.php?action=delete&id=<?php
        echo $values["item_id"];
?>"><span class="text-danger">Remove</span></a>

          <?php
        $total = $total + ($values["item_quantity"] * $values["item_price"]);
      }
?>

               $ <?php
    echo number_format($total, 2);
?>

          <?php
    if (isset($_POST['submit']))
      {
        $_SESSION['total']           = $total;
        $_SESSION['obs']             = $_POST['obs'];
        $_SESSION['table']           = $_POST['table'];
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d', time());
        $hour= date('h:i:s', time());
        $request_create = $mysqli->query("INSERT INTO requests_numbers VALUES (null, '" . $_SESSION['total'] . "','Pendente','" . $_SESSION['obs'] . "','" . $_SESSION['table'] . "','" . $date . "','" . $hour . "','" . $_SESSION['userid'] . "',null,null,null)");
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
