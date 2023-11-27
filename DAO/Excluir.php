<?php
    namespace POO\projetoBDPHP\DAO;

    require_once('Conexao.php');

    use POO\projetoBDPHP\DAO\Conexao;

    class Excluir
    {
        public function Deletar(Conexao $conexao, string $nomeTabela, int $cpf)
        {
            try
            {
                $conn = $conexao->Conectar();
                $sql = "delete from $nomeTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                if($result)
                {
                    echo "<br><br> Excluido com sucesso!";
                }
                else
                {
                    echo "<br><br> Não Excluido";
                }
                mysqli_close($conn);
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//Fim do Catch
        }//Fim do metodo
    }//FIm da Classe
?>