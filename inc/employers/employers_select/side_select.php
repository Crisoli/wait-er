<?php
session_start();
$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
?>

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
               </a><a href="foodlist.php?action=delete&id=<?php
        echo $values["item_id"];
?>"><span class="text-danger">Remove</span></a>

          <?php
        $total = $total + ($values["item_quantity"] * $values["item_price"]);
      }
?>

               $ <?php
    echo number_format($total, 2);
  }
?>