<?php 

    $dsn     = 'mysql:host=localhost;dbname=phpmyadmin';
    $db_user = 'root';
    $db_pass = '';

    $connection = new PDO($dsn, $db_user, $db_pass);