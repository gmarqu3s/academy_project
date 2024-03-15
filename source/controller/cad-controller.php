<?php

    $dirCadModel = require_once __DIR__ . '/../model/cadClient-model.php'; 
    // 'C:\xampp_5.6\htdocs\minha_pasta\academy_project\model\cad-model.php';


    // class index{

    //     public function pagHome(){
    //         require_once __DIR__ . '/../view/index.php';
    //         //'C:\xampp_5.6\htdocs\minha_pasta\academy_project\view\index.php';
    
    //     }
    // }
    class cadController {

        // public function insertClient(){
        //     $cad_list = new clientesModel();

        //     $clientes = $cad_list->insertClient();

        //     require __DIR__ . '/../view/formCad-view.php'; 
        //     //'C:\xampp_5.6\htdocs\minha_pasta\academy_project\view\formCad-view.php';

        // }

        public function listarClientes(){
            // instancia model
            $varClientesModel = new clientesModel();

            // Chamar o método que lista os clientes
            $clientes = $varClientesModel->listarClientes();

            // carrega view
            require __DIR__ . '/../view/listCad-view.php';
            //C:\xampp_5.6\htdocs\minha_pasta\academy_project\view\listCad-view.php';
        }        
    }

    // Criar uma instância do controller e chamar o método listarClientes
    // $index = new index();
    // $index->pagHome();


?>