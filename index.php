<?php
  //include the header file.
  include 'header.php';
?>

<!-- Main gallery -->
<h2 style="text-align: center;"><b>Newest Games</b></h2><br>
<div style="text-align: center;" class="row"><br>
  <?php   
    //Query will fetch the 15 last games added to DB
    $query = $db->query('SELECT * FROM games ORDER BY `id` DESC LIMIT 15');
    $game = $query->fetchAll();
    foreach ($game as $game) 
    {//We loop to create the cards to display for each game and send the id of those games trought the link
      echo '
      <div class="card" style="width: 375px;">
        <a href="game.php?id='.$game['id'].'" title="'.$game['name'].'">
          <img src="' . $game['cover'] . '" alt="'.$game['name'].'" style="height: 125px;">
            <div class="card-body">
              <p class="card-name">'.$game['name'].'</p>
            </div>
        </a>
      </div>
      ';
    }
    ?>
</div>
</body>
<footer style="text-align: center;">Copyright benjamin pittonet<br>Projet PHP - HEH 2019</footer>

</html>