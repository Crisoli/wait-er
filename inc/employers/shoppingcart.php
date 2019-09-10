<?php
include 'inc/employers/shoppingcartarray.php';

?>



     <body style="font-family: 'Exo 2', sans-serif;">
          <br/>
            <div class="row">
            <div class='grid'>

               <?php

               $categorygrid = $mysqli->query("SELECT * FROM category");
                    while($catgrid = mysqli_fetch_array($categorygrid))
                    {?>
                      <div id='
                      <?php
                    echo $catgrid['name'];
                      ?>
                      '>
                      <?php
                    }
               $query = $mysqli->query("SELECT * FROM foodmenu ORDER BY id ASC WHERE category_id = $_SESSION['']");
                    while($row = mysqli_fetch_array($query))
                    {
               ?>
                            <div id='<?php echo $catgrid['name']?>'>
                               <form method="post" action="foodlist.php?action=add&id=<?php echo $row["id"]; ?>">
                                      <div class="card">
                                          <div class="card-image">
                                            <img src="<?php echo $row["image"]; ?>" style="max-height:200px;"/>
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
                  </div>
               <?php
                    }

               ?>
            </div>
               </div>
             </div>

               <script>

               FlexMasonry.init('.grid',{
                 breakpointCols: {
        'min-width: 1500px': 6,
        'min-width: 1200px': 5,
        'min-width: 992px': 4,
        'min-width: 768px': 3,
        'min-width: 576px': 2,
    },
                 responsive: true,
               });

               </script>

     </body>
