<?php
//Setting up DB connection.
$dbHost = "localhost";
$dbName = "vglib";
$dbUsername = "root";
$dbUserpassword = "";

//DB variable.
$db = mysqli_connect('localhost', 'root', '', 'vglib');

//User login. Called whit sign in button.
if (isset($_POST['signin-btn'])) 
{//Check if user got on page via signin button.
    $email = mysqli_real_escape_string($db, $_POST['postmail']);
    $email = strtolower($email);
    $password = mysqli_real_escape_string($db, $_POST['postmdp']);
    if (empty($password)) 
    {
        echo "Password is required";
    }
    else
    {//if password not empty, we set up user information for $_SESSION.
        //Hash password
        $password = md5($password);
        $query = "SELECT * FROM users WHERE mail='$email' AND mdp='$password'";
        $qresult = mysqli_query($db, $query);
        if (mysqli_num_rows($qresult) == 1) 
        {//If we get a match from DB based on mail and password.
            $_SESSION['mail'] = $email;
            $statement = "SELECT id FROM users WHERE mail='$email' AND mdp='$password'";
            //We fetch user id for the session.
            $result = mysqli_query($db, $statement);
            while ( $row = mysqli_fetch_array($result))
            {
                $id = $row['id'];
                $_SESSION['id'] = $id;
            }
            $_SESSION['success'] = "You are now logged in";
            header('location: profil.php');
            //Login successful, redirect user to profil.
        }
        else 
        {//If user info have no match in DB
            echo "Wrong username/password combination";
        }
    }
}

//REGISTER USER
if (isset($_POST['signup-btn'])) 
{//Check if user got on page via signup button
    $email = mysqli_real_escape_string($db, $_POST['postmail']);
    $email = strtolower($email);
    $password = mysqli_real_escape_string($db, $_POST['postmdp']);
    //Check if user is in DB
    $user_check_query = "SELECT * FROM users WHERE mail='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user['mail'] === $email) 
    {//If user already exist
        echo "e-mail already in use.";
    }
    else
    {
  	    $password = md5($password);
  	    $query = "INSERT INTO `users` (`id`, `mail`, `mdp`) VALUES (NULL, '$email', '$password');";
        mysqli_query($db, $query);
  	    $_SESSION['rsuccess'] = "User '$email' now registered";
  	    header('location: signin.php');
    }
}
?>