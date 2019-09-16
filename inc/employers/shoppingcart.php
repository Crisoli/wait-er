<?php
include 'inc/employers/shoppingcartarray.php';

?>

     <body style="font-family: 'Exo 2', sans-serif;">
          <br/>
            <div class='grid' id='grid-ajax'>

            </div>

            <button id="reveal" onclick="sendTheAJAX()" class="button">Why's that?</button>

               <script>



               // 1. create a new XMLHttpRequest object -- an object like any other!
              var myRequest = new XMLHttpRequest();
              // 2. open the request and pass the HTTP method name and the resource as parameters
              myRequest.open('GET', 'inc/employers/gridshow.php');
              // 3. write a function that runs anytime the state of the AJAX request changes
              myRequest.onreadystatechange = function () {
             // 4. check if the request has a readyState of 4, which indicates the server has responded (complete)
             if (myRequest.readyState === 4) {
             // 5. insert the text sent by the server into the HTML of the 'ajax-content'
             document.getElementById('grid-ajax').innerHTML = myRequest.responseText;
                                             }
                                                        };
          $(document).ready(function sendTheAJAX(){
                myRequest.send();
                document.getElementById('reveal').style.display = 'none';
                                  });

                                  setInterval(function sendTheAJAX(){
                           $('#grid-ajax').load('inc/employers/gridshow.php');
                        }, 2000) /* time in milliseconds (ie 2 seconds)*/

               </script>
     </body>
