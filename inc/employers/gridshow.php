

<?php
$HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASS = 'usbw';
$DB_NAME = 'waiter';
$mysqli = new mysqli($HOST, $DB_USERNAME, $DB_PASS,$DB_NAME);

//if(!isset($_SESSION['category'])){
//  $_SESSION['category']='All';
//}
//else{
//  if($_SESSION['category']=='All'){
$query = $mysqli->query("SELECT * FROM foodmenu");
//  }
//  else{
//    $query = $mysqli->query("SELECT * FROM foodmenu WHERE category_id = '".$_SESSION['category']."'");
//  }
  //  }

while($row = mysqli_fetch_array($query))
{
     echo"
                 <form method='post' class='' action='foodlist.php?action=add&id=".$row['id']."'>
                        <div class='card'>
                            <div class='card-image'>
                              <img src='".$row['image']."'/>
                              <span class='card-title black-text'>".$row['name']."</span>
                              <input type='hidden' name='hidden_name'  value='".$row['name']."' />
                              <input type='hidden' name='hidden_price' value='".$row['price']."' />

                              <input type='submit' class='btn-floating halfway-fab waves-light red darken-1' ; name='add_to_cart' style='border:none;' value='+'></input>
                            </div>
                            <input type='number' name='quantity' class='form-control' value='1' style='border-bottom: 2px solid black; background-color:; width:40%; position: absolute; right: 0px;'/>
                            <div class='card-content'>
                              <h5 class=''>R$".$row['price']."</h5>
                              <p>".$row['promodesc']."</p>
                            </div>
                      </div>
      </form>";
      }
