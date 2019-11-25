

     <body style="font-family: 'Exo 2', sans-serif;">
          <br/>

            <?php

            if (isset($_POST["add_to_cart"]))
              {
                if (isset($_SESSION["shopping_cart"]))
                  {
                    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
                    if (!in_array($_GET["id"], $item_array_id))
                      {
                        $count                             = count($_SESSION["shopping_cart"]);
                        $item_array                        = array(
                            'item_id' => $_GET["id"],
                            'item_name' => $_POST["hidden_name"],
                            'item_price' => $_POST["hidden_price"],
                            'item_quantity' => $_POST["quantity"]
                        );
                        $_SESSION["shopping_cart"][$count] = $item_array;
                      }
                    else
                      {
                        $key = array_search($_GET["id"], $item_array_id);
                        $_SESSION["shopping_cart"][$key]["item_quantity"] += $_POST["quantity"];
                      }
                  }
                else
                  {
                    $item_array                   = array(
                        'item_id' => $_GET["id"],
                        'item_name' => $_POST["hidden_name"],
                        'item_price' => $_POST["hidden_price"],
                        'item_quantity' => $_POST["quantity"]
                    );
                    $_SESSION["shopping_cart"][0] = $item_array;
                  }
              }
            if (isset($_GET["action"]))
              {
                if ($_GET["action"] == "delete")
                  {
                    foreach ($_SESSION["shopping_cart"] as $keys => $values)
                      {
                        if ($values["item_id"] == $_GET["id"])
                          {
                             unset($_SESSION["shopping_cart"][$keys]);
                          }
                      }
                  }

              }
            ?>
            <div class="navbar" style=" position: relative;">
            <nav>
            <div class="nav-wrapper">
                    <form method='post'>
                       <div class="input-field" style="">
                      <input type='search' name='search' style="background-color:#2D2F40; " />
                      <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                     <i onclick="document.getElementById('all').click()" class="material-icons">close</i>
                    </form>
            </div>
            </div>
          </nav>
          </div>
          <form method='post'>
          <input type='submit' name='all' id='all' hidden style="background-color:#2D2F40;"/>
        </form>

            <?php

            $categorys = $mysqli->query("SELECT * FROM category");
                while($rys = mysqli_fetch_array($categorys))
                {
                  ?>
                  <div id='menu<?php echo $rys['id'];?>'>
                    <div class="row">

                  <?php
                  if(isset($_POST['search'])){
                $query = $mysqli->query("SELECT * FROM `foodmenu` WHERE name LIKE '".$_POST['search']."%' ORDER BY promo DESC");
                  }
                  else{
                $query = $mysqli->query("SELECT * FROM foodmenu WHERE category_id = '".$rys['id']."' ORDER BY promo DESC");
                      }
                      if(isset($_POST['all'])){
                        $query = $mysqli->query("SELECT * FROM foodmenu WHERE category_id = '".$rys['id']."' ORDER BY promo DESC");
                      }

            while($row = mysqli_fetch_array($query))
            {

                ?>
                <form id='<?php echo $row['id'] ?>' method='post' action='comanda.php?action=add&id=<?php echo $row['id'] ?>'>
                     <div class="col s12 m4 l3" >
                       <?php
                       if($row['promo']==1){
                       ?>
                       <div class='card ' style="">
                           <div class='card-image'>
                             <img src='<?php echo $row['image'] ?>' class="activator" style="object-fit:cover; height:250px;"/>
                             <br><h6><span class='black-text' style="background-color:white; padding-left: 1.8em; text-transform: capitalize; "><?php echo utf8_encode($row['name']); ?></span></h6></br>
                             <?php
                             }
                       else {
                             ?>
                             <div class='card com' style="">
                                 <div class='card-image '>
                                   <img src='<?php echo $row['image'] ?>' class="" style="object-fit:cover; height:250px;"/>
                                   <br><h6><span class='black-text' style="background-color:white; padding-left: 1.8em; text-transform: capitalize;"><?php echo utf8_encode($row['name']); ?></span></h6></br>
                             <?php
                             }
                             ?>
                             <h7><input type='hidden' name='hidden_name' value='<?php echo utf8_encode($row['name']); ?>'/></h7>
                             <h7><input type='hidden' name='hidden_price' value='<?php echo $row['price'] ?>'/></h7>

                             <input type='submit' class='btn-floating halfway-fab waves-light red darken-1' ; name='add_to_cart' style='border:none;' value='+'></input>
                             </div>
                             <div class="col s4 m5 l4 offset-l8 offset-m7 offset-s8">
                             <input type='number' name='quantity' class='form-control' value='1' min="1" max="100" style=''/>
                             </div>

                             <div class='card-content text'>
                             <h6 class=''>R$<?php echo $row['price']?> </h6>
                            </div>
                              <?php
                              if($row['promo']==1){
                              ?>
                              <div class="white-text" style="clip-path: inset(0 0 0 0); background-color:red; width:130px;
                              margin-left:-1%; margin-top:-420px; padding-left: 1.8em; position: absolute;">Em promoção</div>

                              <?php
                              }
                              ?>
                              </div>

                              </div>

               </form>
               <?php
               }
               ?>
             </div>
             </div>
               <?php
               }
         ?>

<script>
$(document).ready(function(){
  $('.sidenav').sidenav();
});
</script>
     </body>
