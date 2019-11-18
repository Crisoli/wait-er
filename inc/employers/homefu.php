	<div class="body">
       	<div class="container responsive">
            <div class="row responsive">
            	<h1>Bem-vindo (nome do funcionário)</h1>
            	<img src="">Aqui coloca a foto de perfil do funcionário.</br>
            </div>
            <div class="row responsive">
                <div class=" col s4 master">
                    <a href="\wait-er-master\foodlist.php"><div class="card horizontal">
                        <div class="card-image">
                            <img src="inc\admin\img\cardapio.png" id="menu" alt="" class="circle"></img>
                        </div>
                        <div class="card-stacked">
                        </div>
                        <div class="card-action" style="background-color: black;">
                            <span class='card-title'>Cardápio</span>
                        </div>
                    </div></a>
                </div>
                <div class="col s8">
                    <div class="rankingdiv">
	                    <?php 
	                    	include("ranking.php");
	                    ?>
                    </div>
                </div>
            </div>	
        </div>
    </div>
    <style>
        .body{
            color: white;
        }
        .container {
            padding-top: 2%;
            color: black	;
        }
        .rankingdiv{
        	width: 100%;
        }
        .row {
            height: 25%;
        }
        
        .card {
            display: block;
            position: relative;
            box-shadow: 15px;
            top: 15%;
            width: 100%;
            height: 150px;
            background-color: #dfdce3;
            color: white;
        }
        
        .master {
            height: 100%;
        }
        
        #menu {
            width: 60%;
            position: relative;
            left: 20%;
            top: 10%;
            color: white;
        }
        
        #estoque {
            width: 75%;
            position: relative;
            left: 15%;
            top: 10%;
            color: white;
        }
        
        #pedidos {
            width: 70%;
            position: relative;
            left: 25%;
            top: 10%;
            color: white;
        }
        #funcionario{
            width: 60%;
            position: relative;
            left: 20%;
            top: 10%;
            color: white;
        }
        #ranking{
            width: 50%;
            position: relative;
            left: 25%;
            top: 10%;
            color: white;
        }
        span {
            color: white;
            padding-top: 50%;
        }
    </style>

</body>
