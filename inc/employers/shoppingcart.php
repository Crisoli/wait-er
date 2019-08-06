<?php include 'inc/employers/shoppingcartarray.php' ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Wait-er | Carrinho</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </head>
      <body>
           <br />
           <div class="container" style="width:700px;">
                <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />
                <?php
                $query = $mysqli->query("SELECT * FROM foodmenu ORDER BY id ASC");
                if(mysqli_num_rows($query) > 0)
                {
                     while($row = mysqli_fetch_array($query))
                     {
                ?>
                <div class="col-md-4">
                     <form method="post" action="foodlist.php?action=add&id=<?php echo $row["id"]; ?>">
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" />
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                          </div>
                     </form>
                </div>
                <?php
                     }
                }
                include 'inc/employers/shoppingcartinsert.php';
                ?>


                     </table>
                </div>
           </div>
           <br />
      </body>
 </html>
