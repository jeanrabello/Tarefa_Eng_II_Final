<?php
    class Produto{
        
        private $codigo;
        private $nome;
        private $quantidade;
        private $valor;
        private $tipo;
        private $info;

        function __construct($codigo, $nome, $quantidade, $valor, $tipo){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->quantidade = $quantidade;
            $this->valor = $valor;
            $this->tipo = $tipo;
        }

        //Gerar array de informações do objeto
        public function gerarInfo(){
            $this->info = array("cod" => $this->getCodigo(), "nome" => $this->getNome(), "quantidade" => $this->getQuantidade(), "valor" => $this->getValor(), "tipo" => $this->getTipo());
        }

        //Getters
        public function getCodigo(){
            return $this->codigo;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }

        public function getValor(){
            return $this->valor;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getInfo(){
            return $this->info;
        }
    }
?>