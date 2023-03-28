<?php

require("conn.php");
require("url.php");

$data = $_POST;
if(!empty($data["type"] == "createcategoria")){
    $nome = $data["nome"];
    
    $sql = "INSERT INTO categoria (nome) VALUES (:nome)";

    $query = $conn->prepare($sql);
    $query->bindParam(":nome",$nome);

    try{
        $query->execute();
        header("Location: ../dashboard.php");
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: $e";
    }

}elseif(!empty($data["type"] == "edit")){


}else{

}