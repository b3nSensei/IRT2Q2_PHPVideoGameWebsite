<?php
  //include the header file.
  include 'header.php';
  if (!isset($_SESSION['mail'])) 
  {//if user isn't logged in
  	header('location: signin.php');
  }
  if (isset($_GET['logout'])) 
  {//If user wants to log out
  	session_destroy();
  	unset($_SESSION['mail']);
  	header("location: index.php");
  }
  if (isset($_POST['list-btn'])) 
  {//Check if user wants to add a list
    //Setting up variable and regex on the name to prevent unwanted caracters
    $list = $_POST['postlist'];
    $list = preg_replace("/[^0-9a-zA-Z ]/","",$list);
    if(empty($list))
    {//making sure list name is not empty.
      echo "Error: List name empty.";
    }
    else
    {
      $uid = $_SESSION['id'];
      //We insert the list into DB using name and user's id
      $sql = $db->query("INSERT INTO lists (id, name, U_id) VALUES (null, '$list', '$uid')");
      mysqli_query($db, $sql);
      $_SESSION['add'] = "'$list' was added";
      header('location: profil.php');
    }
  }
  if (isset($_POST['rm-btn'])) 
  {//Check if user wants to remove a list
    $list = $_POST['rmlist'];
    //Store query then execute
    $sql = $db->query("DELETE FROM lists WHERE id=$list");
    mysqli_query($db, $sql);
    $_SESSION['rmlist'] = "'$list' was remove";
    header('location: profil.php');
  }
?>

<div style=" text-align: center;" class="gallery">
  <h3><b>My lists of games: </b></h3>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <div class="container site">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="profil.php" class="form-group col-md-12">
                <!-- This form allow user to create list -->
                <div class="form-group col-md-12" style="text-align: center;">
                  <label for="list"><b>Create list</b></label>
                  <input type="name" class="form-control" id="list" placeholder="Enter a name for the list"
                    name="postlist" required="required" autocomplete="on">
                </div>
                <div class="form-group col-md-12" style="text-align: center;">
                  <button type="submit" name="list-btn" class="btn btn-primary">Add to my lists</button>
                </div>
              </form>
              <br>
              <form method="POST" action="profil.php" class="form-group col-md-12">
                <!-- This form allow user to delete their list -->
                <div class="form-group col-md-12" style="text-align: center;">
                  <label for="list"><b>Remove list</b></label>
                  <SELECT class="form-control" id="rmlist" name="rmlist" placeholder="--Select a list--" required="required">
                  <?php
                    //We query the user lists to display in the SELECT field
                    $statement = $db->query('SELECT * FROM `lists` WHERE `U_id` = '. $_SESSION['id'].' ');
                    $lists = $statement->fetchAll();
                    foreach ($lists as $lists) 
                    {echo '<OPTION id="'.$lists['id'].'" value="'.$lists['id'].'">'.$lists['name'].' ';}
                  ?>
                  </SELECT>
                </div>
                <div class="form-group col-md-12" style="text-align: center;">
                  <button type="submit" name="rm-btn" class="btn btn-primary">Remove from my lists</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-8" style=" text-align: left;">
        <div class="container-fluid">
          <div style=" text-align: center;">
            <?php   
              //We query user's list to display on his profil
              $statement = $db->query('SELECT * FROM `lists` WHERE `U_id` = '. $_SESSION['id'].' ');
              $lists = $statement->fetchAll();
              foreach ($lists as $lists) 
              {
                echo '
                      <div class="card" class="col-12" style="text-align: center;">
                        <form method="POST" action="list.php" class="form-group col-md-12">
                          <div class="form-group" style="text-align: center;">
                            <a href="list.php?id='.$lists['id'].' " title="'.$lists['name'].'" name="'.$lists['name'].'">
                              <p class="card-name">'.$lists['name'].'</p>
                            </a>
                          </div>
                        </form>
                      </div>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
</body>
<footer style="text-align: center;">Copyright benjamin pittonet<br>Projet PHP - HEH 2019</footer>

</html>