<?php 
//include the header file.
include 'header.php';
if(isset($_POST['addto-btn']))
  {//Check if a game is added to list
    //Setting variables
    $lid = $_POST['postlist'];
    $gid = $_POST['addto-btn'];

    //Connect and prepare statement
    $db = Database::connect();
    $statement = $db->prepare("INSERT INTO contains (L_id, G_id) VALUES (?, ?)");  
    Database::disconnect();

    if (($statement->execute(array($lid, $gid)))) 
    {//if the query validate
      $_SESSION['gaddto'] = "$gid added to $lid";
      echo $_SESSION['gaddto'];
      header("Location: list.php?id=$lid");
    } 
    else 
    {
        echo "Error adding $gid to $lid";
    }
  }
?>