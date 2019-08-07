<div style="clear:both"></div>
<br />
<h3>Order Details</h3>
<div class="table-responsive">
     <table class="table table-bordered">
          <tr>
               <th width="31vw">Item Name</th>
               <th width="6vw">Quantity</th>
               <th width="16vw">Price</th>
               <th width="11vw">Total</th>
               <th width="6vw">Action</th>
          </tr>
          <form method="post">
          <?php
          if(!empty($_SESSION["shopping_cart"]))
          {
               $total = 0;
               foreach($_SESSION["shopping_cart"] as $keys => $values)
               {
          ?>
          <tr>
               <td><?php echo $values["item_name"]; ?></td>
               <td><?php echo $values["item_quantity"]; ?></td>
               <td>$ <?php echo $values["item_price"]; ?></td>
               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
               <td><a href="foodlist.php?action=update&id=<?php echo $values["item_id"];?>"></a><p><a href="foodlist.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
          <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
               }
          ?>
          <tr>
               <td colspan="3" align="right">Total</td>
               <td align="right">$ <?php echo number_format($total, 2); ?></td>
               <td></td>
          </tr>

          <?php
          if (isset($_POST['submit'])) {
            $userid = $_SESSION['userid'];
            $obs = $_POST['obs'];
            $table = $_POST['table'];
            $request_create = $mysqli->query("INSERT INTO requests_numbers VALUES (null, '".$total."','Pendente','".$obs."','".$userid."','".$table."',null,null)");
            $request = $mysqli->query("SELECT id FROM requests_numbers ORDER BY id DESC LIMIT 1");
            while($rowid = mysqli_fetch_array($request))
            {
            $lastid = $rowid['id'];
            }
          foreach ($_SESSION["shopping_cart"] as $key => $values) {
            $item_id = $values['item_id'];
            $item_quantity = $values['item_quantity'];
            $shopping_cart_insert = $mysqli->query("INSERT INTO requests VALUES (null, '".$item_id."', '".$item_quantity."','".$lastid."')");
            }

          }
          }
          ?>
          <select placeholder='Numero da Mesa' name='table' class="browser-default">

          <?php
          $tablesreq = $mysqli->query("SELECT * FROM tables");
          while($rowtable = mysqli_fetch_array($tablesreq)){
            echo utf8_encode('<option value='.$rowtable['table_number'].'>'.$rowtable['table_number'].' - '.$rowtable['size'].' - '.$rowtable['status'].'</option>');

          }
          ?>
        </select>
          <input type="text" name="obs" placeholder="Observações"> </input>
          <input type="submit" name="submit"></input>
        </form>
