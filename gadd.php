<?php
  //include the header file.
  include 'header.php';

  if (!isset($_SESSION['mail'])) 
  {//if user isn't logged in
  	header('location: signin.php');
  }

  if (isset($_GET['logout'])) 
  {//if logout is pressed
  	session_destroy();
  	unset($_SESSION['mail']);
  	header("location: index.php");
  }

  if (isset($_POST['gadd-btn'])) 
  {//include the form to add games to database (admin only)
    include 'addform.php';
  }

  if (isset($_POST['add-btn'])) 
  {//Check if game data was submitted.
    //Setting up variables
    $postname = $_POST['postname'];
    $postdate = $_POST['postdate'];
    $postgenre = $_POST['postgenre'];
    $posted = $_POST['posted'];
    $postdev = $_POST['postdev'];
    $postdes = $_POST['postdes'];
    $postcover = $_POST['postcover'];
    $postvideo = $_POST['postvideo'];

    //Regex to cutsomize video link to embeded link
    $video = preg_replace("[watch\?v=]","embed/",$postvideo);
    $video = '<iframe width="1200" height="675" src="'.$video.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

    //Connect and query to DB
    $db = Database::connect();
    $statement = $db->prepare("INSERT INTO games (name, date, genre, editor, dev, description, cover, video) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");  
    Database::disconnect();
    if (($statement->execute(array($postname, $postdate, $postgenre, $posted, $postdev, $postdes, $postcover, $video)))) 
    {//if the query validate
      $_SESSION['gadd'] = "$postname was added";
      echo $_SESSION['gadd'];
    } 
    else 
    {
        echo "Error adding $postname";
    }
  }
?>
</body>
<footer style="text-align: center;">Copyright benjamin pittonet<br>Projet PHP - HEH 2019</footer>

</html>