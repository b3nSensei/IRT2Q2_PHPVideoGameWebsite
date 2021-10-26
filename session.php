<?php
    //mysqli_connect() function opens a new connection to the MySQL server.
    $dbHost = "localhost";
    $dbName = "japan";
    $dbUsername = "root";
    $dbUserpassword = "";
    $con = new mysqli($dbHost, $dbUsername, $dbUserpassword, $dbName);
    // Storing Session
    $user_check = $_SESSION['id'];
    // SQL Query To Fetch Complete Information Of User
    $query = "SELECT id FROM users WHERE id = '$user_check'";
    $ses_sql = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session = $row['id'];
?>