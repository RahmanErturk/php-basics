<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "firstPhpApp_db";

    $connect = mysqli_connect($host, $username, $password, $dbname);

    // if (!$connect) {
    //     die("Not connected");
    // } else {
    //     echo "connected successfully";
    // }

    if (mysqli_connect_errno() > 0) {
        die("Connection failed: ". mysqli_connect_errno());
    }
?>