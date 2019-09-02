<?php
	include 'database.php';
	include('header.php');
 ?>
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
           <tr style="background-color:#CC5151;" class="white-text">
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
        <input class="white-text red darken-1"  type="submit" name="update" style="border:none; text-align:center;
    position: relative;
    top: 490px;
    left:95%;

                       width:10%;
                       height:20%;
                       font-size: 22px;
                       background-color:#FF6656;
                       font-color: white;
                       border:none;
                       border-radius: 100px;
                       box-shadow: 0px 5px 0px 0px #CE3323;


    " value=">"></input>
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

    <!---  <br><input style="
                       width:100%;
                       height:20%;
                       font-size: 22px;
                       background-color:#FF6656;
                       font-color: white;
                       border:none;
                       border-radius: 8px;
                       box-shadow: 0px 5px 0px 0px #CE3323;

                       "
                         class="white-text "  type="submit" name="update" value="Finalizar">
           </input></br>
      --->

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
                     <div ><?php echo $rec['id'];?></div>
               </td>
                <td></td>
               <td>
                     <?php echo $rec['id_table'];?>
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
                <div class=""><?php echo $rec['obs'];?></div>
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
    <input type="hidden" value=<?php echo $rec['id'];?> name="id">



   <tr>
             <td>
                <!--- nome da comida -->
                  Pão
             </td>

             <td>
                <div class=""><?php echo $rec['total'];?></div>
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
                    <?php echo $rec['started'];?>
              </td>
               <td></td>
              <td>
                    <?php echo $rec['status'];?>
              </td>
          </tr>
 </tbody>




  </div>

        </tbody>

      </table>


</form>

</div>
</div>
</div>
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
<div class="row">
    <div class="col s12 m6 l5">
<div class="card large">
    <div class="card-content white-text" style="background-color:#FF6656; height:30%;">
      <p><h4> Mesa: <?php echo $fin['id_table'];?></h4>  N° do pedido: <?php echo $fin['id'];?></p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a class="active" href="#status">Status</a></li>
        <li class="tab"><a href="#itens">Itens</a></li>
        <li class="tab"><a href="#anotacoes">Anotações</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="status">  <?php echo $fin['started'];?> |  <?php echo $fin['status'];?> </div>
      <div id="itens"> Item |<?php echo $fin['total'];?>| Quantidade </div>
      <div id="anotacoes">  <?php echo $fin['obs'];?></div>
    </div>
  </div>
</div>
</div>

<?php
}
    }
?>
<script type="text/javascript">
 $(document).ready(function(){
   $('.collapsible').collapsible();

 });


 // Or with jQuery
 $(document).ready(function(){
   $('.tabs').tabs();
 });
</script>
