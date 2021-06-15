<?php
    define('DB_SERVER','localhost');
    define('DB_USERNAME','Ankit');
    define('DB_PASSWORD','Ankit');
    define('DB_NAME','vit_express');

    //connecting to database
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($conn == false) {
        die('Error: Cannnot connect to database');
    }
?>