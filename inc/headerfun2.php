<script>
  $('document').ready(function(){
    $('#menu').hide();
    $('#menuclick').click(function(){
      $('#menu').toggle(100000);
    })
  });
</script>

<div class="side-menu row" style="height: 10vh; width: 100%; background: red;">
  <div class="material-icons" id="menuclick" style="">menu</div>
  <div id="menu" style="height: 100vh;width: 100vw; background:blue; ">
    <div class="list">
      <ul class="category-list">
        <?php
          $querycategory= $mysqli->query("SELECT * FROM category");
          if($querycategory->num_rows>0){
            while ($row= $querycategory->fetch_assoc()) {
              echo "<li>".$row['name']."</li>";
            }
          }
        ?>
      </ul>
    </div>
  </div>
</div>
<style type="text/css">
  .menu{
    display: block;
    position: relative;
    z-index: 10;

  }
  .list{
    padding-top: 15px;
    padding-left: 30px;
  }
</style>
