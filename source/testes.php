<?php

    $dirCadModel = require_once __DIR__ . '/../model/cadClient-model.php'; 
    
    class cadController {

        public function listarClientes(){
            $varClientesModel = new clientesModel();

            $clientes = $varClientesModel->listarClientes();

            require __DIR__ . '/../view/listCad-view.php';
        }        
    }



?>