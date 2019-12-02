<?php require_once 'config.php'; ?>
<?php require_once 'inc/database.php'; ?>
<?php
//No funcionario você tem que mudar o "pagead=06" pra pagefu=1
$tablesreq = $mysqli->query("SELECT * FROM tables where status ='Livre'");
while ($rowtable = mysqli_fetch_array($tablesreq))
{

echo "<li><a  href='redirect.php?nmesa=".$rowtable['table_number']."&tmesa=".$rowtable['size']."&pagead=06&pagefu=1&foodslide=true'><i class='material-icons white-text'>assignment_ind</i>Mesa ".$rowtable['table_number']."</a></li>";

}
?>
