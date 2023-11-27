<?php

    namespace POO\projetoBDPHP\DAO;

    require_once('Conexao.php');//Acessando a minha classe de conexão
    
    use POO\projetoBDPHP\DAO\Conexao;

    class Inserir
    {
        public function Insert
        (Conexao $conexao, 
        string $nomeTabela,  
        int $cpf, 
        string $nome, 
        string $telefone, 
        string $endereco, 
        string $email)
        {
            try
            {
                $conn = $conexao->Conectar();
                $sql = "insert into $nomeTabela(cpf, nome, telefone, endereco, email) values('$cpf','$nome','$telefone','$endereco','$email')";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    return "<br><br>Inserido com sucesso!";
                }
                else 
                {
                    return "<br><br>Não Inserido!";
                }//Fim do IfElse

                mysqli_close($conn);//Fechando a conexão com o BD
            }//Fim do Try
            catch(Except $erro)
            {
                echo $erro;
            }//Fim do TryCatch

        }//Fim do Metodo Insert
    }//Fim da Classe
?>