<?php
 include "connexion.php";
 
    $envoim = $db->prepare("SELECT `nomm`,`img` FROM `musique`");
    $envoim->execute();
  

?>


<div id="carousel2">
<?php   while ($row = $envoim->fetch()) {
      $data = $row[0];
      $img =$row[1];
    

?>
      <div class="item">
        <div class="item__image">
          <img src="assets/img/<?php  print $img; ?>.jpg" alt="">
        </div>
        <div class="item__body">
          <div class="item__title">
            <?php 
            print $data;  
            ?>
          </div>
          <div class="item__description">
          <?php 
            print $data;  
            ?>
          </div>
        </div>
      </div>
      <?php } ?>
</div>