<?php
    include 'db.php';

    $query = $connection
             ->query('SELECT `ID`, `Theme`, `Short`, `View`, `IMG`, `created_at`, `Count` FROM `yangiliklar` ORDER BY `ID` DESC LIMIT 4');

    $news_items = $query->fetchAll();