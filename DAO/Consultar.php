<?php
    namespace POO\projetoBDPHP\DAO;

    require_once('Conexao.php');

    use POO\projetoBDPHP\DAO\Conexao;

    class Consultar
    {
        public function ConsultarIndividual(Conexao $conexao, string $nomeTabela, int $cpf)
        {
            try
            {
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados["cpf"] == $cpf)
                    {
                        echo "<br><br>CPF: ".$dados["cpf"].
                             "<br>Nome: ".$dados["nome"].
                             "<br>Telefone: ".$dados["telefone"].
                             "<br>Endereco: ".$dados["endereco"].
                             "<br>Email: ".$dados["email"];
                    }//Fim do If
                }//Fim do While
                mysqli_close($conn);
            }
            catch(Except $erro)
            {
                echo $erro;
            }//Fim do TryCatch
        }//Fim do Metodo

        public function ConsultarTudo(Conexao $conexao, string $nomeTabela)
        {
            try
            {
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    echo "<br><br>CPF: ".$dados["cpf"].
                         "<br>Nome: ".$dados["nome"].
                         "<br>Telefone: ".$dados["telefone"].
                         "<br>Endereco: ".$dados["endereco"].
                         "<br>Email: ".$dados["email"];
                }//Fim do While   
                mysqli_close($conn);            
            }//Fim do Try
            catch(Except $erro)
            {
                echo $erro;
            }//Fim do Catch
        }//Fim do metodo
    }//Fim da Classe
    
?>