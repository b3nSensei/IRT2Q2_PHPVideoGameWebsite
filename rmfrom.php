<?php 
include 'header.php';
if(isset($_POST['rmfrom-btn']))
  {//Check if rm button was pressed
    //Setting up variables
    $lid = $_POST['rmfromlist'];
    $gid = $_POST['rmfrom-btn'];
    //Connect and prepare statement
    $db = Database::connect();
    $statement = $db->prepare("DELETE FROM contains WHERE L_id = $lid AND G_id = $gid");  
    Database::disconnect();
    if (($statement->execute(array($lid, $gid)))) 
    {//if the query validate
      $_SESSION['gaddto'] = "$gid removed from $lid";
      echo $_SESSION['gaddto'];
      header("Location: list.php?id=$lid");
    } 
    else 
    {
        echo "Error removing $gid from $lid";
    }
  }
?>