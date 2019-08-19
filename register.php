<?php include('database.php');

if(isset($_POST['usertype'])) {
    $name= $_POST['username'];
    $pass= $_POST['userpassword'];

    //mysql insert//
    $userinsert= "INSERT INTO accounts VALUES (NULL, '$name','$pass', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa');";
    if ($mysqli->query($userinsert) === TRUE) {

    } else {
        echo "Error: " . $userinsert . "<br>" . $mysqli->error;
    }
}

?>

<?php
//Echo pedidos finalizados hoje
$requestrec = $mysqli->query("SELECT * FROM accounts");
if(mysqli_num_rows($requestrec) > 0)
{
     while($rec = mysqli_fetch_array($requestrec))
     {

        echo $rec['id'].PHP_EOL;

    }
   }
        ?>



  

