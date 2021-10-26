<!-- Base Header, will be load on each page. -->
<?php
  //Load DB
  require 'admin/dbload.php';
  //Start session
  session_start();
  //Connect to DB 
  $db = Database::connect();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamer's Lair - Video game library</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>

<body>
    <h1 style="text-align: center;">
        <a href="index.php" title="home link">
            <img src="./img/logo.png" alt="" style="width: 137px; height: 137px;">
        </a>
    </h1>

    <h1 style="text-align: center;">Gamer's Lair</h1>

    <p style="text-align: center;" class="menu">
        <a href="index.php" title="home link">Home</a> |
        <a href="profil.php" title="Profile page">Profil</a> |
        <a href="signin.php" title="Sign-in/up page">Sign-in/up</a>
    </p>

    <div style=" text-align: center;">
        <p><b>Logged in as: </b>
            <?php 
            //This will display the user's mail on all page if logged in. Otherwise: guest.
            if (isset($_SESSION['mail'])) 
            {//If a user is logged in we display the logout option
                echo $_SESSION['mail'].' '.'<a href="admin/logout.php">(logout)</a></b></p>';
                if($_SESSION['mail'] == 'admin@admin.com' && $_SESSION['id'] == '1' )
                {//If the user logged in is the admin, we add a buttons to add games to DB
                  echo '
                    <form action="gadd.php" method="post">
                        <button type="submit" name="gadd-btn">Add games to Database</button>
                        <br><br>
                    </form>';
                }
            }
            else
            {
                echo "guest";
            }
            ?>
    </div>
    <!-- Search form. Send POST to search.php via submit "Go"-->
    <div style=" text-align: center;">
        <form action="search.php" method="post">
            <input name="search" placeholder="Search (Use spacebar then enter for all games)" autocomplete="on"
                type="text" style="width: 500px;">
            <button type="submit" name="Go">Go</button>
        </form>
    </div><br><br>