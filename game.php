<?php
  //include the header file.
  include 'header.php';

  if(!empty($_GET['id'])) 
  {//If we did GET a game ID, check input
        $id = checkInput($_GET['id']);
  }

  //Connect to db, prepare and execute query
  $db = Database::connect();
  $statement = $db->prepare("SELECT * FROM games WHERE games.id = ?");
  $statement->execute(array($id));
  $gameview = $statement->fetch();
  Database::disconnect();

  function checkInput($data) 
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<div style=" text-align: center;">
  <h3><?php echo $gameview['name'];?></h3>
</div>
<div class="form-actions" style=" text-align: center;">
  <a class="btn btn-secondary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
</div>
<br>

<?php 
//We echo the game's info
echo '
<div class="container-fluid">
  <div class="row">
    <div class="col-4"  >
      <div class="card" style="width: 600px;" >
        <img src="' . $gameview['cover'] . '" alt="'.$gameview['name'].' style="text-align: center;" style="width: 599px;" style="height: auto;">';
          if (!empty($_SESSION['id']))
          {// If user is logged in, we display option to add/remove game to our lists
            echo '
            <form method="POST" action="addto.php" class="form-group col-md-12">
            <br><br>
            ----------------------------------------------------------------------------------------<br><br>
              <div class="form-group col-md-12" style="text-align: center;">
                <label for="title"><b>Do you want to add "'.$gameview['name'].'" to your lists?</b> </label>
                <SELECT class="form-control" id="postlist" name="postlist" placeholder="--Select a list--" required="required">';
                  //Query to display lists in the SELECT field
                  $statement = $db->query('SELECT * FROM `lists` WHERE `U_id` = '. $_SESSION['id'].' ');
                  $lists = $statement->fetchAll();
                  foreach ($lists as $lists) 
                  { echo '<OPTION id="'.$lists['id'].'" value="'.$lists['id'].'">'.$lists['name'].' '; } echo '
                </SELECT>
                No lists? <a href="profil.php" title="create list">Create one </a>
              </div>
              <div class="form-group col-md-12" style="text-align: center;">
                <button type="submit" name="addto-btn" value="'.$gameview['id'].' "class="btn btn-primary">Add</button>
              </div>
            </form>
            <form method="POST" action="rmfrom.php" class="form-group col-md-12">
            ----------------------------------------------------------------------------------------<br><br>
              <div class="form-group col-md-12" style="text-align: center;">
                <label for="title"><b>Remove "'.$gameview['name'].'" from your lists?</b> </label>
                <SELECT class="form-control" id="rmfromlist" name="rmfromlist" placeholder="--Select a list--" required="required">';
                  //Query to display lists in the SELECT field
                  $statement = $db->query('SELECT * FROM `lists` WHERE `U_id` = '. $_SESSION['id'].' ');
                  $lists = $statement->fetchAll();
                  foreach ($lists as $lists) 
                  { echo '<OPTION id="'.$lists['id'].'" value="'.$lists['id'].'">'.$lists['name'].' '; } echo '
                </SELECT>
              </div>
              <div class="form-group col-md-12" style="text-align: center;">
                <button type="submit" name="rmfrom-btn" value="'.$gameview['id'].' "class="btn btn-primary">Remove</button>
              </div>
            </form> ';
            if ($_SESSION['mail'] == 'admin@admin.com' && $_SESSION['id'] == '1' )
            {//If the user logged is the admin, we add the option to remove the game from the DB
              echo '
              <form method="POST" action="dbrm.php" class="form-group col-md-12">
              <br><br>
              ----------------------------------------------------------------------------------------<br><br>
                <div class="form-group col-md-12" style="text-align: center;">
                  <label for="title"><b>Remove "'.$gameview['name'].'" from the Database?</b> </label>
                </div>
                <div class="form-group col-md-12" style="text-align: center;">
                  <button type="submit" name="dbrm-btn" value="'.$gameview['id'].' "class="btn btn-danger">Remove from DB</button>
                </div>
              </form>';
            } 
          } 
          echo'
        </div>
      </div>
      <div class="col-8">
        <div class="card">
          <p><b>Realease: </b>'.$gameview['date'].'</p>
          <p><b>Genre: </b>'.$gameview['genre'].'</p>
          <p><b>Editor: </b>'.$gameview['editor'].'</p>
          <p><b>Developer: </b>'.$gameview['dev'].'</p>
          <p><b>Description: </b>'.$gameview['description'].  '</p><br>  
          <br>
          <p class="card-media" style=" text-align: center;">'.$gameview['video'].'</p>
      </div>
    </div>
  </div>
</div>'; 
?>
</body>
<footer style="text-align: center;">Copyright benjamin pittonet<br>Projet PHP - HEH 2019</footer>

</html>