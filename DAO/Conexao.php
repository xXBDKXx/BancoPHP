<?php 
    namespace POO\projetoBDPHP\DAO;

    class conexao
    {
        public function Conectar()
        {
            try{
                $conn = mysqli_connect('localhost','root','','bancoPhp');
                if($conn)
                {
                    echo "Conectado com sucesso!";
                    return $conn;
                }
            }
            catch(Exception $erro)
            {
                echo $erro;
            }
        }//Fim do Metodo
    }//Fim da Classe 
?>