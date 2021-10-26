<?php 
//include the header file.
include 'header.php';
if(isset($_POST['dbrm-btn']))
  {//Check if rm button was pressed
    //Setting variable
    $gid = $_POST['dbrm-btn'];

    //Connect and prepare statement
    $db = Database::connect();
    $statement = $db->prepare("DELETE FROM games WHERE id = $gid");  
    Database::disconnect();

    if ($statement->execute(array($gid))) 
    {//if the query validate
      $_SESSION['gaddto'] = "$gid removed from DB";
      echo $_SESSION['gaddto'];
      header("Location: index.php");
    } 
    else 
    {
        echo "Error removing $gid from DB";
    }
  }
?>