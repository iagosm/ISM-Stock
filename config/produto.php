<?php

session_start();
require("conn.php");

$data = $_POST;


if($data["type"] == "create"){

   $sku = $data["sku"];
   $nome = $data["nome"];
   $quantidade = $data["quantidade"];
   $fornecedor = $data["fornecedor"];
   $categoria = $data["categoria"];

    $sql = "INSERT INTO produtos (sku, nome, quantidade,id_fornecedor, id_categoria) VALUES (:sku, :nome, :quantidade,:id_fornecedor, :id_categoria)";

    $query = $conn->prepare($sql);

    $query->bindParam(":sku",$sku);
    $query->bindParam(":nome",$nome);
    $query->bindParam(":quantidade",$quantidade);
    $query->bindParam(":id_fornecedor",$fornecedor);
    $query->bindParam(":id_categoria",$categoria);

    try{
        $query->execute();
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: $error";
    }


}elseif($data["type"] == "edit"){
    $sku = $data["sku"];
    $nome = $data["nome"];
    $quantidade = $data["quantidade"];
    $fornecedor = $data["fornecedor"];
    $categoria = $data["categoria"];

    $sql = "UPDATE produtos SET nome = :nome, quantidade = :quantidade, id_fornecedor = :id_fornecedor, id_categoria = :id_categoria WHERE sku = :sku";

    $query = $conn->prepare($sql);

    $query->bindParam(":sku",$sku);
    $query->bindParam(":nome",$nome);
    $query->bindParam(":quantidade",$quantidade);
    $query->bindParam(":id_fornecedor",$fornecedor);
    $query->bindParam(":id_categoria",$categoria);

    try{
        $query->execute();
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: $error";
    }


}elseif($data["type"] == "drop"){

    $sku = $data["sku"];

    $sql = "DELETE FROM produtos WHERE sku = :sku";
     
    $query = $conn->prepare($sql);

    $query->bindParam(":sku", $sku);

    $query->execute();

}else{
    $sku;
    if(!empty($_GET)){
        
        $sku = $_GET["sku"];

        
        $sql = "SELECT * FROM produtos WHERE sku = :sku";

        $query = $conn->prepare($sql);

        $query->bindParam(":sku",$sku);

        $query->execute();
        
        $produtos = $query->fetch();
        
    }else{
        
        $sql = "SELECT * FROM produtos,categoria, fornecedor";

        $query = $conn->prepare($sql);

        $query->execute();

        $produtos = $query->fetchAll();
    }
}


?>