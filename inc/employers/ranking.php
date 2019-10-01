

     <body>
      <div id='thegoddamnrankdiv_ajax'>
       <script>
       var myRequest = new XMLHttpRequest();
       myRequest.open('GET', 'inc/employers/employers_select/rank_select.php');
       myRequest.onreadystatechange = function () {
       if (myRequest.readyState === 4) {
       document.getElementById('thegoddamnrankdiv_ajax').innerHTML = myRequest.responseText;
                                     }
                                                };
       $(document).ready(function side_show(){
        myRequest.send();
        document.getElementById('reveal').style.display = 'none';
                          });
                          setInterval(function side_show(){
                   $('#thegoddamnrankdiv_ajax').load('inc/employers/employers_select/rank_select.php');
                }, 2000) /* time in milliseconds (ie 2 seconds)*/

       </script>


     </body>
