

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
            <div class="navbar" style="padding-top:-20%; position: relative;">
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
                                  <div class="col m5 l3 offset-m5">
                                    <div class='card' style="height:70%;  width:99%;">
                                        <div class='card-image'>

                                          <img src='<?php echo $row['image'] ?>'  style="height:60%; width:100%;"/>
                                          <span class='card-title black-text' style="background-color:white; height:5px;"><?php echo $row['name'] ?></span>
                                          <input type='hidden' name='hidden_name'  value='<?php echo $row['name'] ?>' />
                                          <input type='hidden' name='hidden_price' value='<?php echo $row['price'] ?>' />

                                          <input type='submit' class='btn-floating halfway-fab waves-light red darken-1' ; name='add_to_cart' style='border:none;' value='+'></input>
                                        </div>
                                        <input type='number' name='quantity' class='form-control' value='1' style='border-bottom: 2px solid black; background-color:; width:40%; position: absolute; right: 0px;'/>
                                        <div class='card-content'>
                                          <h5 class=''>R$<?php echo $row['price']?></h5>
                                          <p><?php echo $row['promodesc']?></p>
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
