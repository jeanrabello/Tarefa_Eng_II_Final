<?php

    class UsuarioAdmin extends Usuario{

        function __construct($email, $senha){
            $this->email = $email;
            $this->senha = $senha;
        }

        public function gerarRelatorio(){
            echo "Foram vendidos 320 Produtos";
        }

        public function gerirProdutos(){

        }
    }

?>