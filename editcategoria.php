<?php
require_once("config/produto.php");
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="form-container">
        <form action="config/produto.php" method="POST">
            <div class="form-group">
                <input type="hidden" name="type" value="editcategory">
                <input type="hidden" name="id" value="<?= $categorias["id"]?>">
                <label for="nome">Categoria</label>
                <input type="text" name="nome" placeholder="Digite o nome da Categoria" required value="<?= $categorias["nome"]?>">
            </div>
            
            <button type="submit"><a href="">Cadastrar</a></button>
            <div class="link-login">
               <a href="menu.php">Voltar-se</a>
            </div>
        </form>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>