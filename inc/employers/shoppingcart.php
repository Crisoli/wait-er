<?php
 include 'inc/sidemenu.php';
include 'inc/employers/shoppingcartarray.php';
?>
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


                  <div class="row">
                 <div class="col s7 m4 l4">
                    <div class="card">
          <div class="card-image">

                    <form method="post" action="foodlist.php?action=add&id=<?php echo $row["id"]; ?>">


                              <img src="<?php echo $row["image"]; ?>" class=" circle  float-left " alt=""/>

                             </div>
                             <div class="card-content">

                              <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                              <h4 class="text-danger">R$ <?php echo $row["price"]; ?></h4>

                              <br><input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                              <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /></br>

                             <div class="card-action">
                               <div class="col s2 m4 l2 float-right">
                              <input type="text" name="quantity" class="form-control" value="1" />
                                <input type="submit" name="add_to_cart" style="" class="btn btn-danger float-right" value="+" />
</div>





                               </div>
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
          <br />
     </body>
