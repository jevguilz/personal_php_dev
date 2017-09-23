<?php

    require("constants.php");
    /*$servername = "localhost";
    $username = "root";
    $password = "root";*/

    // 1. Create database connection
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully to database <br/>";

    // 2. Select a database to use
    $db_select = mysqli_select_db($connection,"blog_cms");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }


?>