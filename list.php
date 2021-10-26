<?php
  //include the header file.
  include 'header.php';
  //Setting up the list ID
  $lid = $_GET['id']; 
?>

<h2 style="text-align: center;"><b>List content: </b></h2><br>
<div class="form-actions" style=" text-align: center;">
  <a class="btn btn-secondary" href="profil.php"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
</div>
<div style="text-align: center;" class="row"><br>
  <?php
    //We query games in contains that are part of the list
    $content = $db->query(' SELECT G_id FROM contains WHERE L_id = '. $_GET['id'].' ');
    $games = $content->fetchAll();
    if (empty($games)) 
    {//If no game find
      echo '<p style="text-align: center;">This list is empty. Try adding some games';
    }
    else
    {
      foreach ($games as $games) 
      {//We display all games we've found
        //First we setup variable
        $gid = $games['G_id'];
        //We query games we need
        $query = $db->query("SELECT * FROM games WHERE id = $gid ");
        $qgames = $query->fetchAll();
        foreach ($qgames as $qgames)
        {//We loop the dysplay to create card like in the index
          echo '
          <div class="card" style="width: 375px;">
            <a href="game.php?id='.$qgames['id'].'" title="'.$qgames['name'].'">
              <img src="' . $qgames['cover'] . '" alt="'.$qgames['name'].'" style="height: 125px;">
              <div class="card-body">
                <p class="card-name">'.$qgames['name'].'</p>
              </div>
            </a>
          </div>
          ';
        }
      }
    }
?>
</div>
</body>
<footer style="text-align: center;">Copyright benjamin pittonet<br>Projet PHP - HEH 2019</footer>

</html>