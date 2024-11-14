<?php
    $Host = "localhost";
    $User = "root";
    $Pass = "";
    $DBName = "todolist";
    $TBName = "tasks";

    $MyConnection00 = mysqli_connect($Host, $User, $Pass);

    if (!$MyConnection00) {
        die ("Connection Error." . mysqli_connect_error());
    }

    $CreateDB = "CREATE DATABASE IF NOT EXISTS $DBName";

    if (!mysqli_query($MyConnection00, $CreateDB)) {
        echo "Error Creating Database.";
    }

    mysqli_select_db($MyConnection00, $DBName);
    $CreateTB = "CREATE TABLE IF NOT EXISTS $TBName (
        id INT AUTO_INCREMENT PRIMARY KEY,
        task VARCHAR(255) NOT NULL
    )";

    if (!mysqli_query($MyConnection00, $CreateTB)) {
        echo "Error Creating Database Table." . mysqli_error($MyConnection00);
    }
?>