	<div class="body">
	<h4> <div class="center-align"> <p> Bem-vindo(a) </p> Antes de fazer o pedido, selecione uma mesa.</div></h4>

		<?php
		//No funcionario você tem que mudar o "pagead=06" pra pagefu=1
		$tablesreq = $mysqli->query("SELECT * FROM tables where status ='Livre'");
		while ($rowtable = mysqli_fetch_array($tablesreq))
		{

	echo "
	<p>
	<div class='row'>
	<div class='col s4 m4 l2'>
	<div class='card-panel #ff1744 red accent-3'>
	<div class='center-align'>
	<h4>
	<a href='redirect.php?nmesa=".$rowtable['table_number']."&tmesa=".$rowtable['size']."&pagead=06&pagefu=1&foodslide=true'>
	<div class='white-text'> Mesa ".$rowtable['table_number']." </div>
	</a>
	</h4>
	</div>
	</div>
	</div>
	</p>
	";

		}
		?>

	</div>


</body>
