<?php
  if(isset($_SESSION['pagead'])){
    if($_SESSION['pagead']==1){
      ?>
    <div id="pen" class="col s12">
    
    <?php

//Echo pedidos pendentes
$requestpen = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Pendente'");
if(mysqli_num_rows($requestpen) > 0)
{
     while($pen = mysqli_fetch_array($requestpen))
     {
?>

    <form method="post">
        <div class="row">
            <div class="col s12 m6 l5">
                <div class="card large">
                    <div class="card-content white-text" style="background-color:#FF6656; height:30%;">
                        <p>
                            <h4> Mesa: <?php echo $pen['id_table'];?></h4> N° do pedido:
                            <?php echo $pen['id'];?>
                        </p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a class="active" href="#status">Status</a></li>
                            <li class="tab"><a href="#itens">Itens</a></li>
                            <li class="tab"><a href="#anotacoes">Anotações</a></li>
                        </ul>
                    </div>
                    <div class="card-content grey lighten-4">
                        <div id="status">
                            <?php echo $pen['status'];?>
                        </div>
                        <div id="itens"> Item |
                            <?php echo $pen['total'];?>| Quantidade
                        </div>
                        <div id="anotacoes">
                            <?php echo $pen['obs'];?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    
    </div>
    <div id="rec" class="col s12">
    
    <?php
//Finalizados recentemento

if(isset($_POST['id'])){
$finalizar = $mysqli->query("UPDATE requests_numbers SET status='Finalizado',finished='".$date."',finished_hour='".$hour."', finish_id='".$_SESSION['userid']."' WHERE id = '".$_POST['id']."'");
echo '<script>window.location="comanda.php"</script>';
    }
}
    }

$requestrec = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Finalizado' AND finished = '".$date."'");
if(mysqli_num_rows($requestrec) > 0)
{
     while($rec = mysqli_fetch_array($requestrec))
     {
?>

        <div class="row">
            <div class="col s12 m6 l5">
                <div class="card large">
                    <div class="card-content white-text" style="background-color:#FF6656; height:30%;">
                        <p>
                            <h4> Mesa: <?php echo $rec['id_table'];?></h4> N° do pedido:
                            <?php echo $rec['id'];?>
                        </p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a class="active" href="#status">Status</a></li>
                            <li class="tab"><a href="#itens">Itens</a></li>
                            <li class="tab"><a href="#anotacoes">Anotações</a></li>
                        </ul>
                    </div>
                    <div class="card-content grey lighten-4">
                        <div id="status">
                            <?php echo "Finalizado Recentemente";?> |
                                <?php echo $rec['status'];?>
                        </div>
                        <div id="itens"> Item |
                            <?php echo $rec['total'];?>| Quantidade
                        </div>
                        <div id="anotacoes">
                            <?php echo $rec['obs'];?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
    }
?>
    
    </div>
    <div id="fin" class="col s12">
    
    <?php
//Echo pedidos finalizados
$requestfin = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Finalizado'");
if(mysqli_num_rows($requestfin) > 0)
{
     while($fin = mysqli_fetch_array($requestfin))
     {
?>
                <div class="row">
                    <div class="col s12 m6 l5">
                        <div class="card large">
                            <div class="card-content white-text" style="background-color:#FF6656; height:30%;">
                                <p>
                                    <h4> Mesa: <?php echo $fin['id_table'];?></h4> N° do pedido:
                                    <?php echo $fin['id'];?>
                                </p>
                            </div>
                            <div class="card-tabs">
                                <ul class="tabs tabs-fixed-width">
                                    <li class="tab"><a class="active" href="#status">Status</a></li>
                                    <li class="tab"><a href="#itens">Itens</a></li>
                                    <li class="tab"><a href="#anotacoes">Anotações</a></li>
                                </ul>
                            </div>
                            <div class="card-content grey lighten-4">
                                <div id="status">
                                    <?php echo $fin['started'];?> |
                                        <?php echo $fin['status'];?>
                                </div>
                                <div id="itens"> Item |
                                    <?php echo $fin['total'];?>| Quantidade
                                </div>
                                <div id="anotacoes">
                                    <?php echo $fin['obs'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
}
    }
?>
    
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
