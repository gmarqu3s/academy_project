<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="jquery-3.7.1.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Página Inicial</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <button id="btn-cadastro" class="btn btn-primary btn-lg btn-block">Cadastro de Clientes</button>
        </div>
        <div class="col-md-6">
            <button id="btn-consulta" class="btn btn-success btn-lg btn-block">Consulta de Clientes</button>
        </div>
    </div>
</div>
<!-- Inclua a biblioteca jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Script jQuery para lidar com os eventos de clique nos botões -->
    <script>
        $(document).ready(function() {
            // Evento de clique no botão "Cadastro de Clientes"
            $("#btn-cadastro").click(function() {
                // Fazer requisição AJAX para o controlador correspondente
                var url = 'https://localhost/minha_pasta/academy_project/source/view/'
                $.ajax({
                    url: url+'formCad-view.php',
                    success: function(response) {
                        // Atualizar o conteúdo da página com a resposta do controlador
                        $("body").html(response);
                    },
                    erro: function(erro){
        				console.log("Erro na requisição AJAX: formCad-view.php");
        				console.log(erro);
        			}
                });
            });

            // Evento de clique no botão "Consulta de Clientes"
            $("#btn-consulta").click(function() {
                // Fazer requisição AJAX para o controlador correspondente
                var url = 'https://localhost/minha_pasta/academy_project/source/view/'
                $.ajax({
                    url: url+'listCad-view.php',
                    success: function(response) {
                        // Atualizar o conteúdo da página com a resposta do controlador
                        $("body").html(response);
                    },
        			erro: function(erro){
        				console.log("Erro na requisição AJAX: listCad-view.php");
        				console.log(erro);
        			}
                });
            });
        });
    </script>

</body>
</html>
