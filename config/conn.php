<?php

    $user = 'iago';
    $password = 'Admin123@';
    $dbname = 'ismstock';
    $host = 'localhost';

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user,$password);
        
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: " . $error;
    }