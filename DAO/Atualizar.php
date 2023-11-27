<?php
    namespace POO\projetoBDPHP\DAO;

    require_once('Conexao.php');

    use POO\projetoBDPHP\DAO\Conexao;

    class Atualizar
    {
        public function Atuali(Conexao $conexao, string $nomeTabela, int $cpf, string $campo, string $valor)
        {
            try
            {
                $conn = $conexao->Conectar();
                $sql = "update $nomeTabela set $campo = '$valor' where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                if($result)
                {
                    echo "<br><br> Atualizado com Sucesso!";
                }else
                {
                    echo "<br><br> Não Atualizado!";
                }//Fim do IfElse
                mysqli_close($conn);
            }//Fim do Try
            catch(Except $erro)
            {
                echo $erro;
            }//Fim do Catch
        }//Fim do metodo
    }//Fim da Classe
?>