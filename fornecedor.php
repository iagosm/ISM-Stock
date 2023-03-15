<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Dashboard</title>
</head>

<body>
  <div class="container-fluid" id="main-container">
    <div class="row">
      <p class="forn-title">Fornecedor</p>
      <div class="dashboard-forn">
            <div class="forn-cadastrar">
              <a href="fornecedorcadastrar.php" class=""><img src="assets/user-plus-solid 1.svg" alt="">Cadastrar!</a>
            </div>
            <div class="forn-back">
              <a href="menu.php" class="dashboard-btn"><img src="assets/voltar.svg" alt="">Voltar</a>
            </div>
          </div>
      <div class="col-md-12">
        <div class="data_table">
          <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col">Fornecedor</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Responsável</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr class="">
                <th scope="row">Hyperx</th>
                <td>teste@gmail.com</td>
                <td>99 9999-9999</td>
                <td>João Antonio</td>
                <td>
                  <a href="" class="actions"><img src="assets/olho.svg" alt=""></a>
                  <a href="" class="actions"><img src="assets/update.svg" alt=""></a>
                </td>
              </tr>
              <tr class="">
                <th scope="row">Logitech</th>
                <td>teste1@gmail.com</td>
                <td>99 9999-9999</td>
                <td>João Antonio</td>
                <td>
                  <a href="" class="actions"><img src="assets/olho.svg" alt=""></a>
                  <a href="" class="actions"><img src="assets/update.svg" alt=""></a>
                </td>
              </tr>
              <tr class="">
                <th scope="row">Razer</th>
                <td>teste3@gmail.com</td>
                <td>99 9999-9999</td>
                <td>João Antonio</td>
                <td>
                  <a href="" class="actions"><img src="assets/olho.svg" alt=""></a>
                  <a href="" class="actions"><img src="assets/update.svg" alt=""></a>
                </td>
              </tr>
            </tbody>
          </table>
          </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>