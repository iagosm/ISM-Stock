<?php


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="form-container-cadastrar">
        <form action="#" method="POST">
            <p>Preencha os campos abaixo</p>
            <div class="form-group div-cadastro">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group div-cadastro">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
            </div>

            <div class="form-group div-cadastro">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Digite seu E-mail" required>
            </div>

            <div class="form-group div-cadastro">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="form-group div-cadastro">
                <label for="confirmarsenha">Confirmar senha</label>
                <input type="password" name="confirmarsenha" placeholder="Confirme sua senha" required>
            </div>
            
            <button type="submit" class="btn-cadastrar"><a href="">Cadastrar</a></button>
            <div class="link-login">
                Já possui conta? <a href="index.php">Acesse</a>
            </div>
        </form>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>