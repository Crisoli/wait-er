<?php
$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);

session_start();
?>
<div class="row">
<div class="col s12 m12 l12">
</div>
</div>
<div class="row">
<div class="col s12 m12 l12">
</div>
</div>

<div class="row">
<div class="col s10 m10 l10 offset-l1 offset-s1 offset-m1">
<?php
if (!empty($_SESSION["shopping_cart"]))
  {
    $total = 0;
    foreach ($_SESSION["shopping_cart"] as $keys => $values)
      {
?>
            <p><div class="col s9 m9 l9"> <?php
        echo $values["item_quantity"];
?>x
               <?php
        echo $values["item_name"];
?> </div>

               <div class="offset-l4 offset-s1 offset-m1"> R$ <?php
        echo $values["item_price"];
?> </div></p>
               <a href="foodlist.php?action=delete&id=<?php
        echo $values["item_id"];
?>"><p><div class="center-align"><span class="red-text">Remover pedido</span></div></p></a>
<div class="divider"></div>

          <?php
        $total = $total + ($values["item_quantity"] * $values["item_price"]);
        $_SESSION['total'] = $total;
      }

?>

               <h1><div class="center-align"> R$<?php
    echo number_format($total, 2);
  }

?></div></h1>
</div>
</div>
