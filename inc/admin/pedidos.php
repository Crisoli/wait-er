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
                <div class="card large">
                    <div class="card-content white-text" style="background-color:#FF3028; height:30%;">
                        <p>
                            <h4> Mesa: <?php echo $pen['id_table'];?></h4> N° do pedido:
                            <?php echo $pen['id'];?>
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
                    <div class="card-content grey lighten-4">
                        <div id="status<?php echo $pen['id'];?>">
                            <?php echo "Pendente";?>
                        </div>
                        <div id="itens<?php echo $pen['id'];?>">
<?php
$itemsel1 = $mysqli->query("SELECT * FROM requests WHERE requests_numbers_id = '".$pen['id']."'");
while($item1= mysqli_fetch_array($itemsel1))
        {
        $namesel1 = $mysqli->query("SELECT * FROM foodmenu WHERE id = '".$item1['foodmenu_id']."'");
while($name1= mysqli_fetch_array($namesel1))
{
    echo "<b>|Item:</b> ".$name1['name']." <b>|Preço:</b> ".$name1['price']." <b>|Quantidade:</b> ".$item1['quantity']."<br>";
}
        }
?>

                        </div>
                        <div id="anotacoes<?php echo $pen['id'];?>">
                            <?php echo "<b>Observações: <br></b>".$pen['obs'];?>
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
                <div class="card large">
                    <div class="card-content white-text" style="background-color:#411B87; height:30%;">
                        <p>
                            <h4> Mesa: <?php echo $rec['id_table'];?></h4> N° do pedido:
                            <?php echo $rec['id'];?>
                        </p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a class="active" href="#status<?php echo $rec['id'];?>">Status</a></li>
                            <li class="tab"><a href="#itens<?php echo $rec['id'];?>">Itens</a></li>
                            <li class="tab"><a href="#anotacoes<?php echo $rec['id'];?>">Anotações</a></li>
                        </ul>
                    </div>
                    <div class="card-content grey lighten-4">
                        <div id="status<?php echo $rec['id'];?>">
                            <?php echo "Finalizado";?>
                        </div>
                        <div id="itens<?php echo $rec['id'];?>">
<?php
$itemsel2 = $mysqli->query("SELECT * FROM requests WHERE requests_numbers_id = '".$rec['id']."'");
while($item2= mysqli_fetch_array($itemsel2))
        {
        $namesel2 = $mysqli->query("SELECT * FROM foodmenu WHERE id = '".$item2['foodmenu_id']."'");
while($name2= mysqli_fetch_array($namesel2))
{
    echo "<b>|Item:</b> ".$name2['name']." <b>|Preço:</b> ".$name2['price']." <b>|Quantidade:</b> ".$item2['quantity']."<br>";
}
        }
?>

                        </div>
                        <div id="anotacoes<?php echo $rec['id'];?>">
                            <?php echo "<b>Observações: <br></b>".$rec['obs'];?>
                        </div>
                    </div>
                </div>
            </div>

        <?php
}
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
                        <div class="card large">
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
                    <div class="card-content grey lighten-4">
                        <div id="status<?php echo $fin['id'];?>">
                            <?php echo "Finalizado Recentemente";?>
                        </div>
                        <div id="itens<?php echo $fin['id'];?>">
<?php
$itemsel3 = $mysqli->query("SELECT * FROM requests WHERE requests_numbers_id = '".$fin['id']."'");
while($item3= mysqli_fetch_array($itemsel3))
        {
        $namesel3 = $mysqli->query("SELECT * FROM foodmenu WHERE id = '".$item3['foodmenu_id']."'");
while($name3= mysqli_fetch_array($namesel3))
{
    echo "<b>|Item:</b> ".$name3['name']." <b>|Preço:</b> ".$name3['price']." <b>|Quantidade:</b> ".$item3['quantity']."<br>";
}
        }
?>

                        </div>
                        <div id="anotacoes<?php echo $fin['id'];?>">
                            <?php echo "<b>Observações: <br></b>".$fin['obs'];?>
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
