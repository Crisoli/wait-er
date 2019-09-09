<?php 	
	include('database.php');
	include('header.php');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class=" col s4 master">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="\inc\admin\img\icones\menu.png" id="menu" alt="" class="circle"></img>
                        </div>
                        <div class="card-stacked">
                        </div>
                        <div class="card-action" style="background-color: #fc4a1a;">
                            <span class='card-title'>Cardápio</span>
                        </div>
                    </div>
                </div>
                <div class=" col s4 master">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="\inc\admin\img\icones\estoque.png" id="estoque">
                        </div>
                        <div class="card-stacked">
                        </div>
                        <div class="card-action" style="background-color: #03b754;">
                            <span class="card-title">Estoque</span>
                        </div>
                    </div>
                </div>
                <div class=" col s4 master">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="\inc\admin\img\icones\pedidos.png" id="pedidos">
                        </div>
                        <div class="card-stacked">
                        </div>
                        <div class="card-action" style="background-color: #f7b733;">
                            <span class="card-title">Pedidos</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col s6 master">
            		<div class="card horizontal">	
            			<div class="card-image">
            				<img src="\inc\admin\img\icones\funcionario.png" id="funcionario">
            			</div>
            			<div class="card-action" style="background-color: #40ea20; width: 100%;">	
            				<span class="card-title" style="margin-left: 10%;">Funcionário</span>
            				<div class="card-content" style="margin-left: 10%;">
            					Roberto <br> 
            					Waldisney<br>
            					Rogérinho
            				</div>	
            			</div>
            		</div>
            	</div>
            	<div class="col s6 master">
            		<div class="card horizontal">	

            		</div>
            	</div>
            </div>	
        </div>
    </body>

    </html>
    <style>
        .container {
            margin-top: 10%;
        }
        
        .row {
            height: 100%;
        }
        
        .card {
            display: block;
            position: relative;
            box-shadow: 15px;
            top: 15%;
            width: 100%;
            height: 150px;
            background-color: #dfdce3;
        }
        
        .master {
            height: 100%;
        }
        
        #menu {
            width: 60%;
            position: relative;
            left: 20%;
            top: 20%;
        }
        
        #estoque {
            width: 60%;
            position: relative;
            left: 20%;
            top: 20%;
        }
        
        #pedidos {
            width: 60%;
            position: relative;
            left: 20%;
            top: 20%;
        }
        #funcionario{
            width: 40%;
            position: relative;
            left: 20%;
            top: 20%;

        }
        span {
            color: black;
            padding-top: 50%;
        }
    </style>