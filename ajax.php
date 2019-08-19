<html>
<head>
	<meta charset="utf-8">
</head>
<body>	  
	  <form id="cadastro">
      <div class="col s6 m6">Nome:<input type="text" name="username" placeholder="Digite seu nome aqui." required=""></input></div>
				<div class="col s6 m6">E-mail:<input type="text" name="useremail" placeholder="Digite seu e-mail aqui." required=""></input></div></p>
				<div class="col s12 m12"><SPAN>Tipo de usuário:</SPAN></br>
					<label>
			        	<input class="with-gap" name="usertype" type="radio" value='13' checked />
			        	<span>Funcionário</span>
			      	</label>
					<label>
				        <input class="with-gap" name="usertype" type="radio" value='12' />
				        <span>Gerente</span>
				    </label>
				    <label>
				        <input class="with-gap" name="usertype" type="radio" value='11'/>
				        <span>Administrador</span>
				    </label></p></div>
				<div class="col s6 m6">Número de telefone:<input type="number" name="userphone" placeholder="Digite o seu numéro para contato." required=""></input></p></div>
				<div class="col s6 m6">Descrição: <input type="text" name="description" placeholder="Faça uma breve descrição" required=""></p></div>
				<div class="col s12 m12">Senha:<input type="password" name="userpassword" placeholder="Digite sua senha aqui." required=""></p></div></p>
		<button id="novo">Criar Conta</button>	 
<h1 id='msg'></h1>
	  </form>
	  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
	<script>
		$(document).on('click','#novo',function(){
			var url = 'register.php';
			$.ajax({
	           type: "POST",
	           url: url,
	           data: $('#cadastro').serialize(), // serializes the form's elements.
	           success: function(data)
	           {
	               $('#msg').html(data);
	           }
             });
             return false;
		});

	</script>
  </body>
  </html>