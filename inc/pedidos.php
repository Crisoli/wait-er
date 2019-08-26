
<?php

session_start();
//Echo pedidos pendentes
$requestpen = $mysqli->query("SELECT * FROM requests_numbers WHERE status = 'Pendente'");
if(mysqli_num_rows($requestpen) > 0)
{
     while($pen = mysqli_fetch_array($requestpen))
     {
?>

<div class="row">
  <div class="container">
</div>
</div>
<div class="row">
  <div class="container">
</div>
</div>
<div class="row">
  <div class="container">
</div>
</div>


<form method="post">
  <div class="row">
    <div class="container">
    <div class="col s12 m6 l5">
   <div class="white-grey">


 <table>

                <!--- Mesa, n° do pedido -->

   <thead>
           <tr style="background-color:black;" class="white-text">
             <th >N° do pedido</th>
              <th></th>
             <th>Mesa</th>

           </tr>
   </thead>

   <tbody>
           <tr>
               <td>
                     <div ><?php echo $pen['id'];?></div>
               </td>
                <td></td>
               <td>
                     <?php echo $pen['id_table'];?>
               </td>
           </tr>
  </tbody>


                 <!--- Anotações -->
    <thead>
          <tr style="background-color:#E8EAEF">
              <th>
              </th>

              <th class="center-align">Anotações</th>

              <th>
              </th>
          </tr>
    </thead>

    <tbody>
        <tr>
              <td>
              </td>
              <td>
                <div class=""><?php echo $pen['obs'];?></div>
              </td>
              <td>
              </td>
        </tr>
   </tbody>

                   <!--- itens e preços -->
    <thead style="background-color:#E8EAEF">

            <th>Itens</th>
            <th>Valor</th>
            <th>Quantidade</th>


   </thead>
  <tbody>
    <input type="hidden" value=<?php echo $pen['id'];?> name="id">



   <tr>
             <td>
                <!--- nome da comida -->
                  Pão
             </td>

             <td>
                <div class=""><?php echo $pen['total'];?></div>
             </td>

             <td>
               <!--- quantidade de comida -->
               3
             </td>
  </tr>

  <thead style="background-color:#E8EAEF">
          <tr>
            <th>Data</th>
            <th></th>
            <th>Status</th>
          </tr>
  </thead>

  <tbody>
          <tr>
              <td>
                    <?php echo $pen['started'];?>
              </td>
               <td></td>
              <td>
                    <?php echo $pen['status'];?>
              </td>
          </tr>
 </tbody>




  </div>

        </tbody>

      </table>


       <br><input style="width:100%;" type="submit" name="update" value=">"></input></br>
</form>

</div>
</div>
</div>
</div>


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
<script type="text/javascript">
 $(document).ready(function(){
   $('.collapsible').collapsible();
 });
</script>
