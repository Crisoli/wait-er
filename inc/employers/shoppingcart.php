<?php
include 'inc/employers/shoppingcartarray.php';

?>



     <body style="font-family: 'Exo 2', sans-serif;">
          <br/>
            <div class='grid'>

         
              <?php


               $query = $mysqli->query("SELECT * FROM foodmenu WHERE category_id = '".$_SESSION['category']."'");
                    while($row = mysqli_fetch_array($query))
                    {
               ?>
                               <form method="post" action="foodlist.php?action=add&id=<?php echo $row["id"]; ?>">
                                      <div class="card">
                                          <div class="card-image">
                                            <img src="<?php echo $row["image"]; ?>"/>
                                            <span class="card-title black-text"><?php echo $row["name"]; ?></span>
                                            <input type="hidden" name="hidden_name"  value="<?php echo $row["name"]; ?>" />
                                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                                            <input type='submit' class="btn-floating halfway-fab waves-light red darken-1" ; name='add_to_cart' style="border:none;" value="+"></input>
                                          </div>
                                          <input type="number" name="quantity" class="form-control" value="1" style="border-bottom: 2px solid black; background-color:; width:40%; position: absolute; right: 0px;"/>
                                          <div class="card-content">
                                            <h5 class="">R$ <?php echo $row["price"]; ?></h5>
                                            <p><?php echo $row['promodesc'];?></p>
                                          </div>
                                    </div>
                    </form>
               <?php
                    }

               ?>
            </div>

               <script>

               FlexMasonry.init('.grid',{
                 responsive: true,
               });

               </script>

     </body>
