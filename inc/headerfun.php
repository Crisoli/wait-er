<!-- Jquery CDN--><script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js" type="text/javascript"></script>
<script>
  $('document').ready(function(){
    $('.menu').hide();
    $('.menuclick').click(function(){
      $('.menu').toggle(500);
    })
  });
  <?php
    $connect = mysqli_connect("localhost", "root", "usbw", "wait-er");
  ?>
</script>
<!DOCTYPE html>
<html>

<h1 hidden="">Header Conectado</h1>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Painel Wait-er</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   <!-- Simple Cart --> <link href="css/simple_cart.css" rel="stylesheet">
   <!-- Google Icons --> <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Materialize CSS --> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!-- Font-Awesome CSS --> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <!-- js from materialize--> <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</head>
<div class="side-menu row" style="height: 50px; background: red;">
  <div class="material-icons menuclick" style="padding-left:25px; padding-top:15px;">menu</div>
  <div class="menu" style="height: 500px;width: 50%; background:blue; ">
    <div class="list">
      <ul class="category-list">
        <?php
          $category= "SELECT * FROM category";
          $querycategory= mysqli_query($connect, $category);
          if($querycategory->num_rows>0){
            while ($row= $querycategory->fetch_assoc()) {
              echo "<li>".$row['name']."</li>";
            }
          }
        ?>
      </ul>
    </div>
  </div>
</div>
<style type="text/css">
  .menu{
    display: block;
    position: relative;

  }
  .list{
    padding-top: 15px;
    padding-left: 30px;
  }
</style>
