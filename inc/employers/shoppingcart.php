<?php
include 'inc/employers/shoppingcartarray.php';
?>
     <body style="font-family: 'Exo 2', sans-serif;">

          <br/>
          <div class="container">
             <div class="row">


               <?php
               $query = $mysqli->query("SELECT * FROM foodmenu ORDER BY id ASC");
               if(mysqli_num_rows($query) > 0)
               {
                    while($row = mysqli_fetch_array($query))
                    {
               ?>

                   <div class="col s12 m12 l12">
                  <div class="card midium">

                           <div class="card-image">

                            <form method="post" action="foodlist.php?action=add&id=<?php echo $row["id"]; ?>">
                            <img src="<?php echo $row["image"]; ?>" class="responsive-img" alt=" " />

                            </div>

                            <div class="divider"></div>

                            <span class="card-title center-align"> <?php echo $row["name"]; ?>
                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                            </span>

                            <div class="divider"></div>

                            <div class="card-content center-align">

                             <h5 class="">R$ <?php echo $row["price"]; ?></h5>

                             <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                           </div>

                            <div class="card-action">
                            <div class="col s12 m12 l12 ">
                             <input type="text" name="quantity" class="form-control" value="1" />
                             </div>

                             <input type="submit" name="add_to_cart" style="background-color:#FF291F;  width:100%;" class="btn btn-danger white-text" value="Add"/>

                             </div>





                    </div>
                     </div>

                    </form>

               <?php
                    }

               }


               ?>

               </div>
           </div>
                    </table>


     </body>
