<body>
    <!-- não mexer (eu preciso desse aviso para tomar cuidado 
      <form action='/login/authentication.php' method='post'> -->
    <!-- não mexer -->

    <div class='center-align'>
        
        <div class='row'>
           
            <form class='col s12' method='post'>
                <div class='col s12 m8 offset-m1 l4 offset-l7'>
                    <div class='card-panel grey lighten-5 z-depth-1'>
                        <div class='row valign-wrapper'>
                            <p>
                            </p>
                            <div class='col s12'><span class='flow-text'>E-Waiter</span></div>
                            <div class='container'>
                                <div class='row'>
                                    <p></p>
                                    <p>
                                        <br>
                                        <div class='input-field inline col s3 l3'>
                                            <i class='material-icons prefix'>person_outline</i>
                                            <input id='icon_prefix' placeholder='' type='text' name='username' id='username' required class='' required>
                                            <label for='username'>Username</label>
                                    </p>
                                    </br>
                                    </div>
                                </div>
                            </div>
                            <div class='container'>
                                <div class='row'>
                                    <div class='input-field col s4 m4 l7'>
                                        <i class='material-icons prefix'>lock_outline</i>
                                        <input type='password' name='password' placeholder='' id='password' required class='' required>
                                        <label for='password'>Password</label>
                                    </div>
                                </div>
                                <a class='btn-floating waves-effect waves-dark green-gray darken-3'>
                                    <i class='large material-icons'>chevron_right</i>
                                    <input type='submit' value='Login'></input>
                                  
                                </a>
                                 <button><a href='\ewaiter\inc\employers\cardapio.php'>Ir para o cardápio</a></button>
                                <br />
                                <br />
            </form>
            </div>
            </div>
            </div>
            </div>
        </div>

</body>
<?php 
   include('login/authentication.php');
   include('login/samedata.php');
   ?>