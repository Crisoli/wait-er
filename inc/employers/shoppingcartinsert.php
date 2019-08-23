
          <form method="post">
          <?php
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
               <a href="foodlist.php?action=update&id=<?php
        echo $values["item_id"];
?>"></a><a href="foodlist.php?action=delete&id=<?php
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
        $userid         = $_SESSION['userid'];
        $obs            = $_POST['obs'];
        $table          = $_POST['table'];
        $request_create = $mysqli->query("INSERT INTO requests_numbers VALUES (null, '" . $total . "','Pendente','" . $obs . "','" . $table . "','" . $date . "','" . $hour . "','" . $userid . "',null,null,null)");
        $request        = $mysqli->query("SELECT id FROM requests_numbers ORDER BY id DESC LIMIT 1");
        while ($rowid = mysqli_fetch_array($request))
          {
            $lastid = $rowid['id'];
            unset($_SESSION["shopping_cart"][$keys]);
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
