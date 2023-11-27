<?php 
    namespace POO\projetoBDPHP\Modelo;

    class Pessoa
    {

        public int $cpf;
        public string $nome;
        public string $telefone;
        public string $endereco;
        public string $email;

        public function __construct(int $cpf, string $nome, string $telefone, string $endereco, string $email)
        {
            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->email    = $email;
        }//Fim do construtor

        public function getCPF():int 
        {
            return $this->cpf;
        }//fim do GetCPF

        public function setCPF(int $cpf):void
        {
            $this->cpf = $cpf;
        }//Fim do SetCPF


        public function getNome():string
        {
            return $this->nome;
        }//fim do GetNome

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//Fim do SetNome


        public function getTelefone():string
        {
            return $this->telefone;
        }//fim do GetTelefone

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//Fim do SetTelefone

        public function getEndereco():string
        {
            return $this->endereco;
        }//fim do GetEndereco

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//Fim do SetEndereco

        public function getEmail():string
        {
            return $this->email;
        }//fim do GetEmail

        public function setEmail(string $email):void
        {
            $this->email = $email;
        }//Fim do SetEmail

    }//Fim da classe
?>