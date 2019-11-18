<?php
$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);
?>
<div class="row">
<div class="col s12 m5 l5">
</div>
<div class="col s12 m5 l5">

<ol>

<?php
$rankcount = $mysqli->query("SELECT COUNT(*),starter_id FROM requests_numbers GROUP BY starter_id ORDER BY COUNT(*) DESC");
while($count = mysqli_fetch_array($rankcount))
{
$nameinrank = $mysqli->query("SELECT * FROM accounts WHERE id = '".$count['starter_id']."'");
while($name = mysqli_fetch_array($nameinrank))
{
?>
<li>
<div class="card horizontal">
<div class="col s12 m5 l5">
    <div class="card-image">
<img src="<?php  echo $name['img']; ?>" class="circle" style="width:150px; height:150px; object-fit:cover; position: relative;">
</div>
</div>
     <div class="card-stacked">
       <div class="card-content">
<h3 style="padding-top:10%;"><?php  echo $name['username']; ?></h3>
<strong> Pedidos realizados: </strong><?php  echo $count['COUNT(*)']; ?>
</li><?php  echo "<br>"; ?>
  <?php
}
  }
  ?>
</div>
  </div>
</div>
</div>
</ol>
