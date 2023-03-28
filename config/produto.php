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
        header("Location: ../dashboard.php");
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: $error";
    }


}elseif($data["type"] == "createcategoria"){
    
        $nome = $data["nome"];
        
        $sql = "INSERT INTO categoria (nome) VALUES (:nome)";
    
        $query = $conn->prepare($sql);
        $query->bindParam(":nome",$nome);
    
        try{
            $query->execute();
            header("Location: ../categoria.php");
        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Error: $e";
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
        header("Location: ../dashboard.php");
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: $error";
    }


}elseif($data["type"] == "editcategory"){
   
    $id = $data["id"];
    $nome = $data["nome"];

    $sql = "UPDATE categoria SET nome = :nome WHERE id = :id";
    $query = $conn->prepare($sql);

    $query->bindParam(":nome", $nome);
    $query->bindParam(":id", $id);

    try{
        $query->execute();
        header("Location: ../categoria.php");
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: $error";
    }


}elseif($data["type"] == "deletecategoria"){

    $nome = $data["nome"];

    $sql = "DELETE FROM categoria WHERE nome = :nome";
    $query = $conn->prepare($sql);

    $query->bindParam(":nome", $nome);

    try{
        $query->execute();
        header("Location: ../categoria.php");
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: $error";
    }



}elseif($data["type"] == "drop"){

    $sku = $data["sku"];

    $sql = "DELETE FROM produtos WHERE sku = :sku";
     
    $query = $conn->prepare($sql);

    $query->bindParam(":sku", $sku);

    try{
        $query->execute();
        header("Location: ../dashboard.php");
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: $error";
    }

}else{
    $sku;
    if(!empty($_GET)){
        
        if(isset($_GET["sku"])){
            $sku = $_GET["sku"];
            $sql = "SELECT * FROM produtos WHERE sku = :sku";

            $query = $conn->prepare($sql);

            $query->bindParam(":sku",$sku);

            $query->execute();
            
            $produtos = $query->fetch();
        }elseif(isset($_GET["nome"])){
            $nome = $_GET["nome"];
            
            $sql = "SELECT * FROM categoria WHERE nome = :nome";
            $query = $conn->prepare($sql);

            $query->bindParam(":nome", $nome);
            $query->execute();

            $categorias = $query->fetch();
        }
        

        
        
        
    }else{
        //Fornecedor
        $sql2 = "SELECT * FROM fornecedor";
        $query2 = $conn->prepare($sql2);
        $query2->execute();
        $fornecedor = $query2->fetchAll();

        //Categoria
        $sqli1 = "SELECT * FROM categoria";
        $query1 = $conn->prepare($sqli1);
        $query1->execute();
        $categoria = $query1->fetchAll();

        // Produtos
        $sql = "SELECT * FROM produtos";

        $query = $conn->prepare($sql);

        $query->execute();

        $produtos = $query->fetchAll();
    }
}


?>