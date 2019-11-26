	<div class="body">
       	<div class="container responsive">
            <div class="row responsive">
                <div class=" col s4 master">
                    <a href='redirect.php?pagead=06&foodslide=true'><div class="card horizontal">
                        <div class="card-image">
                            <img src="inc\img\dashboard\cardapio.png" id="menu" alt="" class="circle"></img>
                        </div>
                        <div class="card-stacked">
                        </div>
                        <div class="card-action" style="background-color: black;">
                            <span class='card-title'>Cardápio</span>
                        </div>
                    </div></a>
                </div>
                <div class=" col s4 master">
                    <a href='redirect.php?pagead=3&foodslide=false'><div class="card horizontal">
                        <div class="card-image">
                            <img src="inc\img\dashboard\estoque.png" id="estoque">
                        </div>
                        <div class="card-stacked">
                        </div>
                        <div class="card-action" style="background-color: black;">
                            <span class="card-title">Adicionar ao Cardapio</span>
                        </div>
                    </div></a>
                </div>
                <div class=" col s4 master">
                    <a href='redirect.php?pagead=1&foodslide=false'><div class="card horizontal">
                        <div class="card-image">
                            <img src="inc\img\dashboard\pedidos.png" id="pedidos">
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
            		<a href='redirect.php?profile_session=all&pagead=profile&foodslide=false'><div class="card horizontal" style="height: 200px;">
            			<div class="card-image">
            				<img src="inc\img\dashboard\funcionario.png" id="funcionario">
            			</div>
            			<div class="card-action" style="background-color: black; width: 100%; margin-left: 3%;">
            				<span class="card-title" style="margin-left: 10%;">Funcionário</span>
            				<div class="card-content" style="margin-left: 10%;">
            				1.<br>
										2. <br>
            				3.

            				</div>
            			</div>
            		</div></a>
            	</div>
            	<div class="col s6 master">
            		<a href='redirect.php?pagead=8&foodslide=false'><div class="card horizontal"  style="height: 200px;">
                        <div class="card-image">
                            <img src="inc\img\dashboard\rank.png" id="ranking">
                        </div>
                        <div class="card-action" style="background-color: black; width: 100%; margin-left: 3%;">
                            <span class="card-title" style="margin-left: 10%;">Ranking</span>
                            <div class="card-content" style="margin-left: 10%;">
															1.<br>
															2. <br>
					            				3.
                            </div>
                        </div>
            		</div></a>
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
