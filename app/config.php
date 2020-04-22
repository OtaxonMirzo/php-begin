<?php include 'db.php';
    try{
        $connection;
    }
    catch (PDOExiption $e){
        print "Error!: ". $e->getMessage() . "<br/>";
        die();
    }
    $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 10;
    $page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; 
    $links = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query = "SELECT * FROM yangiliklar";
    require_once 'paginator.class.php';
    