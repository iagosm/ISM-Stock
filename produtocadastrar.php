<?php
require_once("config/conn.php");
require_once("config/produto.php");
require_once("config/url.php");


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de produto</title>
</head>

<body>
    <div class="form-container-cadastrar">
        <form action="config/produto.php" method="POST">
            <input type="hidden" name="type" value="create">
            <p>Preencha os campos abaixo</p>
            <div class="form-group-select div-cadastro">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Digite o nome do produto" required>
            </div>
            <div class="form-group-select div-cadastro">
                <label for="sku">SKU</label>
                <input type="text" name="sku" placeholder="Digite o SKU do produto" required maxlength="9">
            </div>

            <div class="form-group-select div-cadastro">
                <label for="quantidade">Quantidade</label>
                <input type="text" name="quantidade" placeholder="Digite a quantidade" required>
            </div>
            
            <div class="divselect">
            <div class="form-group-select div-cadastro">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria">
                    <option select>Selecione a categoria</option>
                    <?php foreach($categoria as $category): ?>
                    <option value="<?= $category["id"]?>"><?=$category["nome"] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group-select div-cadastro">
                <label for="fornecedor">Fornecedor</label>
                <select name="fornecedor" id="fornecedor">
                    <option select>Selecione o fornecedor</option>
                    <option value="1">Hyperx</option>
                    <option value="">Logitech</option>
                    <option value="">Razer</option>
                    <option value="">Redragon</option>
                </select>
            </div>
            </div>
            <div>
            <a href="#" class="btn-limpar limpar" id="limpar">Limpar os campos</a>
            </div>
            
            <button type="submit" class="btn-cadastrar">Cadastrar</button>
            <div class="link-login">
                <a class="voltar-menu" href="menu.php">Voltar</a>
            </div>
        </form>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>