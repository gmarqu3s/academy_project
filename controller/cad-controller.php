<?php

    require_once 'C:\xampp_5.6\htdocs\minha_pasta\academy_project\model\cad-model.php';

    class cadController {

        public function listarClientes(){
            // instancia model
            $cad_list = new cadPessoaModel();

            // Chamar o método que lista os clientes
            $clientes = $cad_list->listarClientes();

            // carrega view
            require 'C:\xampp_5.6\htdocs\minha_pasta\academy_project\view\formCad-view.php';
        }
    }

    // Criar uma instância do controller e chamar o método listarClientes
    $controller = new cadController();
    $controller->listarClientes();


?>