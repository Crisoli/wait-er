<body>
    <!-- não mexer (eu preciso desse aviso para tomar cuidado
      <form action='/login/authentication.php' method='post'> -->
    <!-- não mexer -->
    <div class="row">
        <div class="col-12"></div>
    </div>
    <div class="row">
        <div class="col-12"></div>
    </div>

    <div class="row">
        <div class="col-3 offset-1">
            <div class='card-panel grey lighten-5 z-depth-3'>
                <div class='row  container valign-wrapper'>

                        <img src="inc/img/Waiter.png" class="w-100 p-100">
                    </div>
                    <div class='container'>
                        <div class='row'>
                            <!--Caixa de texto-->
                        </div>
                        <form action='/login/authentication.php' method='post'>
                            <div class='input-field inline col s12 l12'>
                                <p>
                                    <input type="text" name="nome" placeholder="Nome" required>
                                </p>
                                <p>
                                    <input type='password' name='password' placeholder='Senha' id='password' required class='' required>
                                </p>
                                <!--Botão-->
                                <a class='btn-floating waves-effect waves-dark green-gray darken-3 center'>
                                    <i class='large material-icons'>chevron_right</i>
                                    <input type='submit' value='Login'></input>
                                </a>
                                <!--  -->
                                </p>
                            </div>
                    </div>
                </div>

            </div>
        </div>
        <div   style="
position: absolute;
right:6%;
top:2%;
padding:2%;
"  class="col-7 d-none d-sm-block">

            <div class='row  valign-wrapper'>
                <div class='col s1 l5'>

                    <img src="inc/img/teste2.jpeg" class="" >
                </div>
            </div>
        </div>
    </div>

    </form>

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }
    </script>

    </div>
</body>
<?php
   include('login/authentication.php');
   //include('login/samedata.php');
?>
<style>
.row{
position: relative;
  top:-12%;
min-width:40%;
height:10%;
}
</style>
