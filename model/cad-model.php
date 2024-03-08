<?php

    /**
     * Created by VsCode
     * User: Gabriel Marques
     * Date: 08/03/2024
     */

    require_once 'C:\xampp_5.6\htdocs\minha_pasta\academy_project\config.php';

    class cadPessoaModel {
        public function listarClientes(){
            $connection_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if($connection_db->connect_error){
                echo 'Erro de conexão com o Banco de dados.' . $connection_db->connect_error;
            }else{
                echo 'Database Connection Sucefull';
            }

            $query = "
                select
                  *
                from
                    cliente  
                ";
            
            // return $this->db->exec($query);
            $result = $connection_db->query($query);

            if ($result->num_rows > 0) {
                $clientes = array();
                
                while ($row = $result->fetch_assoc()){
                    $clientes[] = $row;
                }

                // $connection_db->close();

                return $clientes;

            } else {
                echo 'Nenhuma informação encontrada na tabela cliente';
                return array();
            }

        }    
    }

?>