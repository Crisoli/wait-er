<?php
include 'inc/headerfun.php';
include 'inc/employers/shoppingcartarray.php';
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Wait-er | Carrinho</title>
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     </head>
     <body>
          <br />
          <div class="container" style="">
               <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />
               <?php
               $query = $mysqli->query("SELECT * FROM foodmenu ORDER BY id ASC");
               if(mysqli_num_rows($query) > 0)
               {
                    while($row = mysqli_fetch_array($query))
                    {
               ?>
               <div class="col s12 m4 l5">

                  <div class="row">

                    <div class="container">

                    <form method="post" action="foodlist.php?action=add&id=<?php echo $row["id"]; ?>">

                              <div style="width:10em; margin:2px;">
                              <img src="<?php echo $row["image"]; ?>" class=" rounded float-left " alt=""/>
                             </div>

                              <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                              <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>


                               <div class="col s2 m4 l5 float-right">
                              <p><input type="text" name="quantity" class="form-control" value="1" />
                                <input type="submit" name="add_to_cart" style="" class="btn btn-danger float-right" value="+" /></p>
</div>
                              <br><input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                              <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /></br>




                               </div>
                               </div>


                                 <!---  fim da parte de produtos -->

                    </form>
               </div>
               <?php
                    }
                    include 'inc/employers/shoppingcartinsert.php';
               }
               ?>

                    </table>
               </div>
          </div>
          <br />
     </body>
</html>
