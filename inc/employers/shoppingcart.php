

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



            <?php


            if(!isset($_SESSION['category'])){
              $_SESSION['category']='All';
              $query = $mysqli->query("SELECT * FROM foodmenu");
            }
            else{
              if($_SESSION['category']=='All'){
            $query = $mysqli->query("SELECT * FROM foodmenu");
              }
              else{
                $query = $mysqli->query("SELECT * FROM foodmenu WHERE category_id = '".$_SESSION['category']."'");
              }
                }
                echo $_SESSION['category'];

            while($row = mysqli_fetch_array($query))
            {

                 echo"

                             <form id='".$row['id']."' method='post' action='foodlist.php?action=add&id=".$row['id']."'>
                                    <div class='card'>
                                        <div class='card-image'>
                                          <img src='".$row['image']."'/>
                                          <span class='card-title black-text'>".$row['name']."</span>
                                          <input type='hidden' name='hidden_name'  value='".$row['name']."' />
                                          <input type='hidden' name='hidden_price' value='".$row['price']."' />

                                          <input type='submit' class='btn-floating halfway-fab waves-light red darken-1' ; name='add_to_cart' style='border:none;' value='+'></input>
                                        </div>
                                        <input type='number' name='quantity' class='form-control' value='1' style='border-bottom: 2px solid black; background-color:; width:40%; position: absolute; right: 0px;'/>
                                        <div class='card-content'>
                                          <h5 class=''>R$".$row['price']."</h5>
                                          <p>".$row['promodesc']."</p>
                                        </div>
                                  </div>
                  </form>";
                  }
            ?>

     </body>
