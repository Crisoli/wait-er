

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
                             <form id='<?php echo $row['id'] ?>' method='post' action='comanda.php?action=add&id=<?php echo $row['id'] ?>'>
                                  <div class="col m4 l3" >
                                  <div class='card' style="height:80%; width:auto">
                                    <?php
                                    if($row['promo']==1){
                                    ?>

                                        <div class='card-image'>
                                          <img src='<?php echo $row['image'] ?>' style="object-fit:cover; height:300px;"/>
                                          <span class='card-title promo black-text' style=" height:5px;"><?php echo utf8_encode($row['name']); ?></span>
                                          <?php
                                          }
                                          else {
                                          ?>
                                              <div class='card-image'>
                                                <img src='<?php echo $row['image'] ?>' style="object-fit:cover; height:300px;"/>
                                                <span class='card-title com black-text' style="background-color:white; height:5px;"><?php echo utf8_encode($row['name']); ?></span>
                                          <?php
                                          }
                                          ?>

                                          <input type='hidden' name='hidden_price' value='<?php echo $row['price'] ?>' />
                                          <input type='hidden' name='hidden_name'  value='<?php echo utf8_encode($row['name']); ?>' />                                          

                                          <input type='submit' class='btn-floating halfway-fab waves-light red darken-1' ; name='add_to_cart' style='border:none;' value='+'></input>
                                        </div>
                                        <input type='number' name='quantity' class='form-control' value='1' min="1" max="100" style='border-bottom: 1px solid black; background-color:; width:40%; position: absolute; right: 0px;'/>
                                        <div class='card-content text'>
                                          <h5 class=''>R$<?php echo $row['price']?> </h5>

                                          <?php
                                          if($row['promo']==1){
                                          ?>
                                          <h5>PROMOÇÃO!</h5>
                                          <p><?php echo utf8_encode($row['promodesc']);?></p>
                                          <?php
                                          }
                                          ?>

                                        </div>
                                        <div class="card-action">
                                        <!-- Modal Trigger -->
                                        <button data-target="modal<?php echo $row['id'];?>" class="btn modal-trigger">Editar</button>
                                        </div>

                                  </div>
                  </form>
                <!-- Modal Structure -->
                <form method="post" enctype="multipart/form-data">
              <div id="modal<?php echo $row['id'];?>" class="modal">
                <div class="modal-content">
 <div class="container">
        <input type="text" readonly hidden value="<?php echo $row['id']?>" name="hide"></input>
				<input type="text" name="newname">
				<input type="number" name="newprice" >
				<input type="text" name="newdesc">
        <input type="file" name="newImage">

        <?php
        if($row['promo']==1){
        ?>
          <label for="check<?php echo $row['id'];?>"><div> Promoção<input type="checkbox" id="check<?php echo $row['id'];?>" name="promo" class="filled-in" checked="checked"> </div></label>
        <?php
        }
        else{
        ?>
          <label for="check<?php echo $row['id'];?>"><div> Promoção<input type="checkbox" id="check<?php echo $row['id'];?>" name="promo" class="filled-in" > </div></label>
        <?php
        }
        ?>
      </div>
                </div>
                <div class="modal-footer">
                  <input type="submit" class="modal-close waves-effect waves-green btn-flat" value="Alterar"></input>
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                </div>
              </div>
<?php if(!empty($_POST['newname'])){
 $update = $mysqli->query("UPDATE foodmenu SET name = '".$_POST['newname']."' WHERE id = '".$_POST['hide']."'");
}
      if(!empty($_POST['newprice'])){
 $update = $mysqli->query("UPDATE foodmenu SET price = '".$_POST['newprice']."' WHERE id = '".$_POST['hide']."'");
 }
      if(!empty($_POST['newdesc'])){
 $update = $mysqli->query("UPDATE foodmenu SET promodesc = '".$_POST['newdesc']."' WHERE id = '".$_POST['hide']."'");
}
if(!empty($_POST['newdesc'])){
  $update = $mysqli->query("UPDATE foodmenu SET promodesc = '".$_POST['newdesc']."' WHERE id = '".$_POST['hide']."'");
 }
 if(!empty($_FILES['newImage'])){
  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
  $path = $_FILES['newImage']['name'];
  $ext = pathinfo($path, PATHINFO_EXTENSION);
   //Pegando extensão do arquivo
  $new_name = date("Y.m.d-H.i.s") .".". $ext; //Definindo um novo nome para o arquivo
  $dir = 'inc/img/uploads/menu/'; //Diretório para uploads
  move_uploaded_file($_FILES['newImage']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
  $direct= $dir.$new_name;
  $selectimg = $mysqli->query("SELECT * FROM foodmenu WHERE id = '".$_POST['hide']."'");
  $update = $mysqli->query("UPDATE foodmenu SET image = '".$direct."' WHERE id = '".$_POST['hide']."'");
}
?>
              </form>
                </div>
                  <?php
                  }
                  ?>

                </div>
                  <?php
                  }
            ?>

     </body>



     <script>
 document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});
   </script>
