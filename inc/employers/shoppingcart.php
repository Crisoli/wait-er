

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
                       <div class="input-field">
                      <input type='search' name='search' style="background-color:#2D2F40;"/>
                      <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                     <i class="material-icons">close</i>
                    </form>
            </div>
            </div>
          </nav>
          </div>

            <?php

            $categorys = $mysqli->query("SELECT * FROM category");
                while($rys = mysqli_fetch_array($categorys))
                {
                  ?>
                  <div id='menu<?php echo $rys['id'];?>'>
                    <div class="row">

                  <?php
                  if(isset($_POST['search'])){
                $query = $mysqli->query("SELECT * FROM `foodmenu` WHERE category_id = '".$rys['id']."' and name LIKE '".$_POST['search']."%' ORDER BY promo DESC");
                  }
                  else{
                $query = $mysqli->query("SELECT * FROM foodmenu WHERE category_id = '".$rys['id']."' ORDER BY promo DESC");
                      }

            while($row = mysqli_fetch_array($query))
            {

                ?>
                             <form id='<?php echo $row['id'] ?>' method='post' action='foodlist.php?action=add&id=<?php echo $row['id'] ?>'>
                               <div class="col m4 l3 offset-m5">
                                 <?php
                                 if($row['promo']==1){
                                 ?>
                                 <div class='card promo' style=" width:99%;">
                                     <div class='card-image'>
                                       <img src='<?php echo $row['image'] ?>'/>
                                       <span class='card-title promo black-text' style=" height:5px;"><?php echo $row['name'] ?></span>
                                       <?php
                                       }
                                       else {
                                       ?>
                                       <div class='card com' style=" width:99%;">
                                           <div class='card-image'>
                                             <img src='<?php echo $row['image'] ?>'/>
                                             <span class='card-title com black-text' style="background-color:white; height:5px;"><?php echo $row['name'] ?></span>
                                       <?php
                                       }
                                       ?>
                                       <input type='hidden' name='hidden_name'  value='<?php echo $row['name'] ?>' />
                                       <input type='hidden' name='hidden_price' value='<?php echo $row['price'] ?>' />

                                       <input type='submit' class='btn-floating halfway-fab waves-light red darken-1' ; name='add_to_cart' style='border:none;' value='+'></input>
                                     </div>
                                     <input type='number' name='quantity' class='form-control' value='1' style='border-bottom: 2px solid black; background-color:; width:40%; position: absolute; right: 0px;'/>
                                     <div class='card-content text'>
                                       <h5 class=''>R$<?php echo $row['price']?> </h5>

                                       <?php
                                       if($row['promo']==1){
                                       ?>
                                       <h5>PROMOÇÃO!</h5>
                                       <p><?php echo $row['promodesc']?></p>
                                       <?php
                                       }
                                       ?>
                                       <style>
                                         .com{
                                           background: linear-gradient(277deg, #f8f8f8, #f9f9f9, #f7f7f7);
                                           background-size: 600% 600%;

                                            animation: content-wrap 59s ease infinite;

                                            @keyframes content-wrap {
                                                0%{background-position:0% 86%}
                                                50%{background-position:100% 15%}
                                                100%{background-position:0% 86%}
                                            }
                                         }
                                         .text {
text-transform: uppercase;
background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
font: {
 size: 20vw;
 family: $font;
};
}
                                        .promo {
                                          background: linear-gradient(270deg, #0d0d0d, #252525);
                                           background-size: 400% 400%;

                                           animation: AnimationName 30s ease infinite;

                                           @keyframes AnimationName {
                                               0%{background-position:0% 50%}
                                               50%{background-position:100% 50%}
                                               100%{background-position:0% 50%}
}                                   }
                                       </style>

                                     </div>
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
