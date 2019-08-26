<?php
//Echo pedidos pendentes
$requestpen = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Pendente'");
if(mysqli_num_rows($requestpen) > 0)
{
     while($pen = mysqli_fetch_array($requestpen))
     {
?>
<form method="post">
<div>
  <input type="hidden" value=<?php echo $pen['id'];?> name="id">
 
  <?php echo $pen['id'];?>
  <?php echo $pen['status'];?>
  <?php echo $pen['obs'];?>
  <?php echo $pen['total'];?>
  <?php echo $pen['id_table'];?>
  <?php echo $pen['started'];?>
  <input type="submit" name="update" value="Finalizar Pedido"></input>

</div>

</form>
<?php
if(isset($_POST['id'])){
$finalizar = $mysqli->query("UPDATE requests_numbers SET status='Finalizado',finished='".$date."',finished_hour='".$hour."', finish_id='".$_SESSION['userid']."' WHERE id = '".$_POST['id']."'");
header('location:comanda.php');
    }
}
    }
?>

<?php
//Echo pedidos finalizados hoje
$requestrec = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Finalizado' AND started = '".$date."'");
if(mysqli_num_rows($requestrec) > 0)
{
     while($rec = mysqli_fetch_array($requestrec))
     {
?>

<div>
  <?php echo $rec['id'];?>
  <?php echo $rec['status'];?>
  <?php echo $rec['obs'];?>
  <?php echo $rec['total'];?>
  <?php echo $rec['id_table'];?>
  <?php echo $rec['started'];?>
</div>

<?php
}
    }
?>

<?php
//Echo pedidos finalizados
$requestfin = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Finalizado'");
if(mysqli_num_rows($requestfin) > 0)
{
     while($fin = mysqli_fetch_array($requestfin))
     {
?>
<div>
  <?php echo $fin['id'];?>
  <?php echo $fin['status'];?>
  <?php echo $fin['obs'];?>
  <?php echo $fin['total'];?>
  <?php echo $fin['id_table'];?>
  <?php echo $fin['started'];?>
</div>

<?php
}
    }
?>
