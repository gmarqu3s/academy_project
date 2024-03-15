<?php

    /**
     * Created by VsCode
     * User: Gabriel Marques
     * Date: 08/03/2024
     */

    require_once __DIR__ . '/../config.php'; 
    // 'C:\xampp_5.6\htdocs\minha_pasta\academy_project\config.php';
    
    class clientesModel {        
        public function listarClientes(){
            // Tentar conectar ao banco de dados
            $connection_db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            // Verificar se a conexão foi bem-sucedida
            if (!$connection_db) {
                die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
            } else {
                echo "Conexão com o banco de dados bem-sucedida!";
            }            
            $query = "SELECT * FROM cliente";
            
            // executa select
            $result = mysqli_query($connection_db, $query);
            // verifica se a consulta foi realizada com sucesso
            if (!$result) {
                die("Erro ao executar a consulta: " . mysqli_error($connection_db));
            }
            // cria array para armezenar os clientes
            $clientes = array();
            // itera sobre os resultados e guarda no array
            while ($row = mysqli_fetch_assoc($result)) {
                $clientes [] = $row;
            }

            mysqli_close($connection_db);

            return $clientes;

        }

        // public function insertClient(){
        // }
    }
?>