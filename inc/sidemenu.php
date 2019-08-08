<script>
  $('document').ready(function(){
    $('.menu').hide();
    $('.menuclick').click(function(){
      $('.menu').toggle(500);
    })
  });

</script>
<div class="side-menu row" style="height: 50px; background: red;">
  <div class="material-icons menuclick" style="padding-left:25px; padding-top:15px;">menu</div>
  <div class="menu" style="height: 500px;width: 50%; background:blue; ">
    <div class="list">
      <ul class="category-list">
        <?php
          $querycategory= $mysqli->query('SELECT * FROM category');
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

  }
  .list{
    padding-top: 15px;
    padding-left: 30px;
  }
</style>
