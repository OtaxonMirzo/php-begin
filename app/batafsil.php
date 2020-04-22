<?php
    include 'db.php';

    $id = $_GET['ID'];
    
    $query1 = $connection
              ->query('UPDATE `yangiliklar` SET `Count`=`Count`+1 WHERE `ID`='.$id);
    
    $query = $connection
        ->query("SELECT `ID`, `Theme`, `Short`, `View`, `IMG`, `created_at`, `Count` FROM `yangiliklar`  WHERE `ID`=".$id);
    $news = $query->fetch();
    echo "12345";
?>
        