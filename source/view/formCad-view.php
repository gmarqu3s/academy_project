<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Clientes</title>
  </head>
</html>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="listCad-view.php">Consultar clientes cadastrados</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <h1>Academy</h1>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nome" id="nome">
        <input type="text" class="form-control" placeholder="Sobre Nome" id="sobrenome">
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Data de Nascimento" id="data_nascimento">
        <input type="text" class="form-control" placeholder="E-mail" id="email">
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Telefone Cell" id="telefone">
        <input type="text" class="form-control" placeholder="CEP" id="cep">
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Endereço" id="endereco">
        <input type="text" class="form-control" placeholder="Cidade" id="cidade">
        <input type="text" class="form-control" placeholder="Estado" id="estado">
    </div>

    <!-- <input id="buttonCadastrar" type="submit" value="Cadastrar"> -->
    <button id="buttonCadastrar" class="btn btn-primary">Cadastrar</button>

    <script>
        $(document).ready(function () {
            $("#buttonCadastrar").click(function () {
                // Recuperar os valores dos campos
                var dadosClient = {
                    nome: $("#nome").val(),
                    sobrenome: $("#sobrenome").val(),
                    data_nascimento: $("#data_nascimento").val(),
                    email: $("#email").val(),
                    telefone: $("#telefone").val(),
                    cep: $("#cep").val(),
                    endereco: $("#endereco").val(),
                    cidade: $("#cidade").val(),
                    estado: $("#estado").val()
                };

                var jsonDadosClient = JSON.stringify(dadosClient);

                $.ajax({
                    url: "../model/insertClient-model.php",
                    type: 'POST',
                    data: jsonDadosClient,
                    success: function (response) {
                        alert("Cliente cadastrado com sucesso!");
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr, responseText);
                        // alert("Erro ao cadastrar cliente. Por favor, tente novamente."); 
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>