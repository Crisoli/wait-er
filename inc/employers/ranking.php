

     <body style="font-family: 'Exo 2', sans-serif;">
<?php
              $queryrank = $mysqli->query("SELECT COUNT(*) FROM requests_numbers GROUP BY starter_id ORDER BY COUNT(*) DESC; ");
            while($row = mysqli_fetch_array($queryrank))
            {


                ?>


                  <?php
                  }
                  ?>

     </body>
