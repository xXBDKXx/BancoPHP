<?php
    namespace POO\projetoBDPHP;

    require_once('Modelo/Pessoa.php');//Requisitando o uso do arquivo pessoa
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');

    use POO\projetoBDPHP\Modelo\Pessoa;//Acessar e usar todos os metodos desse arquivo
    use POO\projetoBDPHP\DAO\Conexao;
    use POO\projetoBDPHP\DAO\Inserir;
    use POO\projetoBDPHP\DAO\Consultar;
    use POO\projetoBDPHP\DAO\Atualizar;
    use POO\projetoBDPHP\DAO\Excluir;

    $pessoa = new Pessoa("123457","Allan","119898998989","Avenida Senador Vergueiro","allan.sobral");
    
    //Banco de dados

    $conexao = new Conexao();

    //Inserir dados no banco de dados
    //$inserir = new Inserir();
    //$inserir->Insert($conexao, "pessoa", $pessoa->getCPF(), $pessoa->getNome(), $pessoa->getTelefone(), $pessoa->getEndereco(), $pessoa->getEmail());

    //Consulta no DB
    $consultar = new Consultar();
    //Comentario somente para nao exacutar|$consultar->ConsultarIndividual($conexao, "pessoa", "123457")
    $consultar->ConsultarTudo($conexao, "pessoa");

    //Atualizar
    $atualizar = new Atualizar();
    //$atualizar->Atuali($conexao, "pessoa", "123457", "nome", "Jaime Torres");

    //Excluir
    $excluir = new Excluir();
    //$excluir->Deletar($conexao, "pessoa", "123456");

?>