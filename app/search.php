<?php

    include 'db.php';

    

    if (isset($_GET['key'])) {
        $key = $_GET['key'];
        $key = '%'.trim($key).'%';

        $query = $connection->prepare("SELECT * FROM `yangiliklar` 
                            WHERE `Theme` LIKE :key 
                            OR `Short` LIKE :key 
                            OR `View` LIKE :key
                            OR `IMG` LIKE :key 
                            ORDER BY `ID` DESC
                            LIMIT 5");

        $query->execute([':key' => $key]);
                
        $items = $query->fetchAll();
    }

    
