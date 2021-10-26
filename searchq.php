<?php
//Search script
if (!empty($_POST['search']))
    {//If a search was POST
        //Setting up variables and regex to replace non valid caracter by none
        $string = $_POST['search'];
        $string = preg_replace("#[^0-9a-z]#i","",$string);
        //We query requested games from the DB where we get similarity to the POST string
        $query = $db->query("SELECT * FROM games WHERE name LIKE '%$string%'");
        $gameview = $query->fetchAll();
        //Displaying games
        echo '<h2 style="text-align: center;"><b>Search result for : '.$string.'</b></h2><br>';
        echo '<div style="text-align: center;" class="row"><br>';
        foreach ($gameview as $gameview) 
        {//Echoing each game card.
            echo '
                <div class="card" style="width: 375px;">
                    <a href="game.php?id='.$gameview['id'].'" title="'.$gameview['name'].'">
                        <img src="' . $gameview['cover'] . '" alt="'.$gameview['name'].'" style="height: 125px;">
                        <div class="card-body">
                            <p class="card-name">'.$gameview['name'].'</p>
                        </div>
                    </a>
                </div>';
        }
        echo '</div>';
    }
    else
    {
        echo '<p style="text-align: center;">Invalid search. Please enter a game to search!</p>';
    }
?>