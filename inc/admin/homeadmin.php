    <body>
        <div class="container responsive">
            <div class="row responsive">
                <div class=" col s4 master">
                    <a href="\wait-er-master\foodlist.php"><div class="card horizontal">
                        <div class="card-image">
                            <img src="img\cardapio.png" id="menu" alt="" class="circle"></img>
                        </div>
                        <div class="card-stacked">
                        </div>
                        <div class="card-action" style="background-color: black;">
                            <span class='card-title'>Cardápio</span>
                        </div>
                    </div></a>
                </div>
                <div class=" col s4 master">
                    <a href="#"><div class="card horizontal">
                        <div class="card-image">
                            <img src="img\estoque.png" id="estoque">
                        </div>
                        <div class="card-stacked">
                        </div>
                        <div class="card-action" style="background-color: black;">
                            <span class="card-title">Estoque</span>
                        </div>
                    </div></a>
                </div>
                <div class=" col s4 master">
                    <a href="pedidos.php"><div class="card horizontal">
                        <div class="card-image">
                            <img src="img\pedidos.png" id="pedidos">
                        </div>
                        <div class="card-stacked">
                        </div>
                        <div class="card-action" style="background-color: black;">
                            <span class="card-title">Pedidos</span>
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="row">
            	<div class="col s6 master">
            		<a href="#"><div class="card horizontal" style="height: 200px;">	
            			<div class="card-image">
            				<img src="img\funcionario.png" id="funcionario">
            			</div>
            			<div class="card-action" style="background-color: black; width: 100%; margin-left: 3%;">	
            				<span class="card-title" style="margin-left: 10%;">Funcionário</span>
            				<div class="card-content" style="margin-left: 10%;">
            					Roberto <br> 
            					Waldisney<br>
            					Rogérinho
            				</div>	
            			</div>
            		</div></a>
            	</div>
            	<div class="col s6 master">
            		<a href="ranking.php"><div class="card horizontal"  style="height: 200px;">	
                        <div class="card-image">
                            <img src="img\ranking.png" id="ranking">
                        </div>
                        <div class="card-action" style="background-color: black; width: 100%; margin-left: 3%;">   
                            <span class="card-title" style="margin-left: 10%;">Ranking</span>
                            <div class="card-content" style="margin-left: 10%;">
                                1º-Waldisney <br> 
                                2º-Luquinhas<br>
                                3º-Roberto
                            </div>  
                        </div>
            		</div></a>
            	</div>
            </div>	
        </div>
    </body>
    <style>
        body{
            color: white;

        }
        .container {
            margin-top: 10%;
            color: white;
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
            top: 15%;
            color: white;
        }
        
        #estoque {
            width: 75%;
            position: relative;
            left: 15%;
            top: 20%;
            color: white;
        }
        
        #pedidos {
            width: 70%;
            position: relative;
            left: 25%;
            top: 15%;
            color: white;
        }
        #funcionario{
            width: 75%;
            position: relative;
            left: 20%;
            top: 10%;
            color: white;

        }
        #ranking{
            width: 60%;
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