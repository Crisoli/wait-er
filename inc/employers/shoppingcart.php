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

               <div class="row">
                   <div class="col s12 m6">
                     <div class="card">
                       <div class="card-image">
                         <img src="<?php echo $row["image"]; ?>" />
                         <span class="card-title black-text"><?php echo $row["name"]; ?></span>
                         <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                         <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                         <input type="submit" id='submit' name="add_to_cart" style="visibility: hidden; width:0%; height:0px;" class="btn btn-danger white-text" value="Adicionar"/>
<label for='submit'>
                         <a class="btn-floating halfway-fab waves-effect waves-light cyan darken-1"><i class="material-icons">add</i></a>
</label>
                       </div>
                       <input type="number" name="quantity" class="form-control halfway-fab waves-light cyan darken-1" value="1" style="width:40%; position: absolute; right: 0px; border-bottom-left-radius:10px;"/>
                       <div class="card-content">
                         <h5 class="">R$ <?php echo $row["price"]; ?></h5>
                         <p><?php echo $row['promodesc'];?></p>
                       </div>
                     </div>
                   </div>
                 </div>

                   <div class="col s12 m6">
                  <div class="card">

                           <div class="card-image">

                            <form method="post" action="foodlist.php?action=add&id=<?php echo $row["id"]; ?>">
                            <img src="<?php echo $row["image"]; ?>" />

                            </div>



                            <div class="card-content center-align">

                              <span class="card-title"> <?php echo $row["name"]; ?>
                              <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                              </span>

                             <h5 class="">R$ <?php echo $row["price"]; ?></h5>

                             <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                           </div>

                            <div class="card-action">
                            <div class="col s12 m12 l12 ">
                             <input type="text" name="quantity" class="form-control" value="1" />
                             </div>

                             <input type="submit" name="add_to_cart" style="background-color:#FF291F;  width:100%;" class="btn btn-danger white-text" value="Adicionar"/>

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
