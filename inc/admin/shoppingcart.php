
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
                                  <div class="col m4 l3" >
                                    <?php
                                    if($row['promo']==1){
                                    ?>
                                    <div class='card'>
                                        <div class='card-image'>
                                        <img src='<?php echo $row['image'] ?>' class="activator" style="object-fit:cover; height:250px;"/>
                                          <br><h5><span class='black-text' style="background-color:white; padding-left: 1.8em; text-transform: capitalize; "><?php echo utf8_encode($row['name']); ?></span></h5></br>
                                          <?php
                                          }
                                          else {
                                          ?>
                                          <div class='card com'>
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <img src='<?php echo $row['image'] ?>' style="object-fit:cover; height:250px;"/>
                                                 <br><h5><span class='black-text' style="background-color:white; padding-left: 1.8em; text-transform: capitalize;"><?php echo utf8_encode($row['name']); ?></span></h5></br>
                                          <?php
                                          }
                                          ?>
                                          <input type='hidden' name='hidden_name'  value='<?php echo utf8_encode($row['name']); ?>' />
                                          <input type='hidden' name='hidden_price' value='<?php echo $row['price'] ?>' />

                                          <input type='submit' class='btn-floating halfway-fab waves-light red darken-1' ; name='add_to_cart' style='border:none;' value='+'></input>
                                                 </div>
                                                 <div class="col s4 m5 l4 offset-l8 offset-m7 offset-s8">
                                            <input type='number' name='quantity' class='form-control' value='1' min="1" max="100" style='border-bottom: 1px solid black; background-color:; width:40%; position: absolute; right: 0px;'/>
                                          </div>

                                          <div class='card-content text'>
                                        <h5 class=''>R$<?php echo $row['price']?> </h5>
                                       </div>

                                       <div class="card-reveal">
                                         <span class="card-title grey-text text-darken-4">Extras<i class="material-icons right">close</i></span>
                                         <p><?php echo $row['promodesc'];?></p>
                                       </div>

                                         <?php
                                         if($row['promo']==1){
                                         ?>
                                         <div class="white-text" style="clip-path: inset(0 0 0 0); background-color:red; width:130px;
                                         margin-left:-1%; margin-top:-420px; padding-left: 1.8em; position: absolute;">Em promoção</div>

                                            <?php
                                            }
                                            ?>

                                        <div class="card-action">
                                        <!-- Modal Trigger -->
                                     <button data-target="modal<?php echo $row['id'];?>" class="btn modal-trigger">Editar</button>
                                     <button data-target="modaltodelete<?php echo $row['id'];?>" class="btn modal-trigger">Excluir</button>

                                   </div>
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

                <div id="modaltodelete<?php echo $row['id'];?>" class="modal">
    <div class="modal-footer">
      <input type="submit" class="modal-close waves-effect waves-green btn-flat" name='delete' value="Deletar do Cardapio"></input>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
    </div>

<?php if(!empty($_POST['newname'])){
 $update = $mysqli->query("UPDATE foodmenu SET name = '".$_POST['newname']."' WHERE id = '".$_POST['hide']."'");
 echo "<meta http-equiv='refresh' content='0'>";

}
      if(!empty($_POST['newprice'])){
 $update = $mysqli->query("UPDATE foodmenu SET price = '".$_POST['newprice']."' WHERE id = '".$_POST['hide']."'");
 echo "<meta http-equiv='refresh' content='0'>";

 }
      if(!empty($_POST['newdesc'])){
 $update = $mysqli->query("UPDATE foodmenu SET promodesc = '".$_POST['newdesc']."' WHERE id = '".$_POST['hide']."'");
 echo "<meta http-equiv='refresh' content='0'>";

}
if(!empty($_POST['newdesc'])){
  $update = $mysqli->query("UPDATE foodmenu SET promodesc = '".$_POST['newdesc']."' WHERE id = '".$_POST['hide']."'");
  echo "<meta http-equiv='refresh' content='0'>";

 }
 if(!empty($_FILES['newImage'])){
  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
  $path = $_FILES['newImage']['name'];
  $ext = pathinfo($path, PATHINFO_EXTENSION);
   //Pegando extensão do arquivo
  $filename = pathinfo($_FILES['newImage']['name'], PATHINFO_FILENAME);
  $new_name = $filename.date("Y.m.d-H") .".". $ext; //Definindo um novo nome para o arquivo
  $dir = 'inc/img/uploads/menu/'; //Diretório para uploads
  move_uploaded_file($_FILES['newImage']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
  $direct= $dir.$new_name;
  $update = $mysqli->query("UPDATE foodmenu SET image = '".$direct."' WHERE id = '".$_POST['hide']."'");
  echo "<meta http-equiv='refresh' content='0'>";
}
if(isset($_POST['delete'])){
  $deletefrommenu = $mysqli->query("DELETE FROM foodmenu WHERE id = '".$_POST['hide']."'");
}
?>

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
<script>
document.addEventListener('DOMContentLoaded', function() {
 var elems = document.querySelectorAll('.modal');
 var instances = M.Modal.init(elems);
});
</script>
