<?php
  if(isset($_SESSION['pagead'])){
    if($_SESSION['pagead']==1){
      ?>
    <div class="row">
    <form method="post">
        <div id="pen">
    <?php
//Echo pedidos pendentes
$requestpen = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Pendente'");
if(mysqli_num_rows($requestpen) > 0)
{
     while($pen = mysqli_fetch_array($requestpen))
     {
?>
      <input type="hidden" value=<?php echo $pen['id'];?> name="id">
            <div class="col s12 m6 l4">
                <div class="card large" style="height:auto;">
                    <div class="card-content white-text" style="background-color:#FF4831; height:30%;">
                        <p>
                            <h4> Mesa: <?php echo $pen['id_table'];?></h4> N° do pedido:
                            <?php echo $pen['id'];?>
                            <br><input type="submit" name="cancel" value="Cancelar Pedido"></input>
                            <br><input type="submit" name="update" value="Finalizar Pedido"></input>

                        </p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width" class="black-text">
                        <li class="tab"><a class="active" href="#status<?php echo $pen['id'];?>">Status</a></li>
                            <li class="tab"><a href="#itens<?php echo $pen['id'];?>">Itens</a></li>
                            <li class="tab"><a href="#anotacoes<?php echo $pen['id'];?>">Anotações</a></li>
                        </ul>
                    </div>
                    <div class="card-content">
                        <div id="status<?php echo $pen['id'];?>">
                            <div class="center-align"> <h6><?php echo "Pendente";?></h6> </div>
                        </div>
                        <div id="itens<?php echo $pen['id'];?>">
<?php
$itemsel1 = $mysqli->query("SELECT * FROM requests WHERE requests_numbers_id = '".$pen['id']."'");
while($item1= mysqli_fetch_array($itemsel1))
        {
        $namesel1 = $mysqli->query("SELECT * FROM foodmenu WHERE id = '".$item1['foodmenu_id']."'");
while($name1= mysqli_fetch_array($namesel1))
{
    ?>
    <div class="col s6 m6 l9">
    <p><h6><?php echo utf8_encode($name1['name']); ?></h6>
    </div>
    <div class="col s6 m6 l3">
    <h6 class="right-align">
    <?php echo $item1['quantity']; ?>
    </div>
  </h6>
    </p>
    <div class="col s12 m12 l3 offset-l9">
    <h6 class="right-align">

    <?php echo $name1['price']; ?>
    </h6>
    </div>

    <?php
    }
    ?>

    <?php
            }
    ?>
                        </div>
                        <div id="anotacoes<?php echo $pen['id'];?>">
                            <br><?php echo utf8_encode($pen['obs']);?></br>
                        </div>
                    </div>
                </div>
            </div>

    <?php
     }
    }

    if(isset($_POST['id'])){
    $finalizar = $mysqli->query("UPDATE requests_numbers SET status='Finalizado',finished='".$date."',finished_hour='".$hour."', finish_id='".$_SESSION['userid']."' WHERE id = '".$_POST['id']."'");
    echo '<script>window.location="comanda.php"</script>';
    }
    if(isset($_POST['cancel'])){
    $finalizar = $mysqli->query("UPDATE requests_numbers SET status='Cancelado',finished='".$date."',finished_hour='".$hour."', finish_id='".$_SESSION['userid']."' WHERE id = '".$_POST['id']."'");
    echo '<script>window.location="comanda.php"</script>';
    }

    ?>
    </div>
    </form>
    <div id="rec">



    <?php
//Finalizados recentemente
$requestrec = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Finalizado' AND finished = '".$date."'");
if(mysqli_num_rows($requestrec) > 0)
{
     while($rec = mysqli_fetch_array($requestrec))
     {
?>
                <div class="col s12 m6 l4">
                <div class="card large" style="height:auto;">
                    <div class="card-content white-text" style="background-color:#638EEB; height:30%;">
                        <p>
                            <h4> Mesa: <?php echo $rec['id_table'];?></h4> N° do pedido:
                            <?php echo $rec['id'];?>
                        </p>
                    </div>
                    <div class="card-tabs">
                        <ul class="blue-text tabs tabs-fixed-width" >
                        <li class="tab"><a class="active" href="#status<?php echo $rec['id'];?>">Status</a></li>
                        <li class="tab"><a href="#itens<?php echo $rec['id'];?>">Itens</a></li>
                        <li class="tab"><a href="#anotacoes<?php echo $rec['id'];?>">Anotações</a></li>
                        </ul>
                    </div>
                    <div class="card-content">
                        <div id="status<?php echo $rec['id'];?>">
                          <div class="center-align"> <h6><?php echo "Finalizado Recentemente";?></h6> </div>
                        </div>
                        <div id="itens<?php echo $rec['id'];?>">
<?php
$itemsel2 = $mysqli->query("SELECT * FROM requests WHERE requests_numbers_id = '".$rec['id']."'");
while($item2= mysqli_fetch_array($itemsel2))
        {
        $namesel2 = $mysqli->query("SELECT * FROM foodmenu WHERE id = '".$item2['foodmenu_id']."'");
while($name2= mysqli_fetch_array($namesel2))
{
    ?>
    <div class="col s6 m6 l9">
    <p><h6><?php echo utf8_encode($name2['name']); ?></h6>
    </div>
    <div class="col s6 m6 l3">
    <h6 class="right-align">
    <?php echo $item2['quantity']; ?>
    </div>
  </h6>
    </p>
    <div class="col s12 m12 l3 offset-l9">
    <h6 class="right-align">
    <?php echo $name2['price']; ?>
    </h6>
    </div>

<?php
}
?>

<?php
        }
?>

                        </div>
                        <div id="anotacoes<?php echo $rec['id'];?>">
                        <p><?php echo utf8_encode($rec['obs']);?></p>
                        </div>
                    </div>
                    </div>
                  </div>


        <?php
}
?>

<?php
    }
?>

 </div>
 <div id="fin">
    <?php
//Echo pedidos finalizados
$requestfin = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Finalizado' and finished!='".$date."'");
if(mysqli_num_rows($requestfin) > 0)
{
     while($fin = mysqli_fetch_array($requestfin))
     {
?>

                    <div class="col s12 m6 l4">
                        <div class="card large" style="height:auto;">
                            <div class="card-content white-text" style="background-color:#411B87; height:30%;">
                                <p>
                                    <h4> Mesa: <?php echo $fin['id_table'];?></h4> N° do pedido:
                                    <?php echo $fin['id'];?>
                                </p>
                            </div>
                            <div class="card-tabs">
                                <ul class="tabs tabs-fixed-width">
                                <li class="tab"><a class="active" href="#status<?php echo $fin['id'];?>">Status</a></li>
                            <li class="tab"><a href="#itens<?php echo $fin['id'];?>">Itens</a></li>
                            <li class="tab"><a href="#anotacoes<?php echo $fin['id'];?>">Anotações</a></li>
                        </ul>
                    </div>
                    <div class="card-content">
                        <div id="status<?php echo $fin['id'];?>">
                          <h6 class="center-align"><?php echo "Finalizado";?></h6>
                        </div>
                        <div id="itens<?php echo $fin['id'];?>">
<?php
$itemsel3 = $mysqli->query("SELECT * FROM requests WHERE requests_numbers_id = '".$fin['id']."'");
while($item3= mysqli_fetch_array($itemsel3))
        {
        $namesel3 = $mysqli->query("SELECT * FROM foodmenu WHERE id = '".$item3['foodmenu_id']."'");
while($name3= mysqli_fetch_array($namesel3))
{
    ?>
    <div class="col s6 m6 l9">
    <p><h6><?php echo utf8_encode($name3['name']); ?></h6>
    </div>
    <div class="col s6 m6 l3">
    <h6 class="right-align">
    <?php echo $item3['quantity']; ?>
    </div>
  </h6>
    </p>
    <div class="col s12 m12 l3 offset-l9">
    <h6 class="right-align">
    <?php echo $name3['price'];
    ?>
    </h6>
    </div>


    <?php
    echo $fin['total'];

}
        }
?>
                        </div>
                        <div id="anotacoes<?php echo $fin['id'];?>">
                        <div class="center-align"><?php echo utf8_encode($fin['obs']);?></div>
                                </div>
                            </div>
                        </div>
                    </div>



                <?php
}
    }
?>
</div>

<div id="can">
   <?php
//Echo CANCELADO
$requestcan = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Cancelado'");
if(mysqli_num_rows($requestcan) > 0)
{
    while($can = mysqli_fetch_array($requestcan))
    {
?>

                   <div class="col s12 m6 l4">
                       <div class="card large" style="height:auto;">
                           <div class="card-content white-text" style="background-color:black; height:30%;">
                               <p>
                                   <h4> Mesa: <?php echo $can['id_table'];?></h4> N° do pedido:
                                   <?php echo $can['id'];?>
                               </p>
                           </div>
                           <div class="card-tabs">
                               <ul class="tabs tabs-fixed-width">
                               <li class="tab"><a class="active" href="#status<?php echo $can['id'];?>">Status</a></li>
                           <li class="tab"><a href="#itens<?php echo $can['id'];?>">Itens</a></li>
                           <li class="tab"><a href="#anotacoes<?php echo $can['id'];?>">Anotações</a></li>
                       </ul>
                   </div>
                   <div class="card-content grey lighten-4">
                       <div id="status<?php echo $can['id'];?>">
                           <div class="center-align"> <h6><?php echo "Cancelado";?></h6> </div>
                       </div>
                       <div id="itens<?php echo $can['id'];?>">
<?php
$itemsel4 = $mysqli->query("SELECT * FROM requests WHERE requests_numbers_id = '".$can['id']."'");
while($item4= mysqli_fetch_array($itemsel4))
       {
       $namesel4 = $mysqli->query("SELECT * FROM foodmenu WHERE id = '".$item3['foodmenu_id']."'");
while($name4= mysqli_fetch_array($namesel4))
{
   ?>
   <div class="col s6 m6 l9">
   <p><h6><?php echo utf8_encode($name4['name']); ?></h6>
   </div>
   <div class="col s6 m6 l3">
   <h6 class="right-align">
   <?php echo $item4['quantity']; ?>
   </div>
 </h6>
   </p>
   <div class="col s12 m12 l3 offset-l9">
   <h6 class="right-align">
   <?php echo $name4['price']; ?>
   </h6>
   </div>

   <?php
}
       }
?>

                       </div>
                       <div id="anotacoes<?php echo $can['id'];?>">
                      <br><?php echo utf8_encode($can['obs']);?></br>
                               </div>
                           </div>
                       </div>
                   </div>



               <?php
}
   }
?>
</div>

    </div>
    <?php
   }
 }
      ?>

                        <script type="text/javascript">
                        $(document).ready(function() {
                            $('.collapsible').collapsible();
                        });
                        // Or with jQuery
                        $(document).ready(function() {
                            $('.tabs').tabs();
                        });
                    </script>
