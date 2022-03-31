<?php
class SelecaoDAO
{
    public function __construct()
    {
        // Importando as classes de conexão
        require_once('conexao.php');
        require_once('./model/selecao.php');

        //Instâncias do objetos de conexão
        $this->conexaoMySQL = new Conexao();

        //Abrir a conexão com o BD
        $this->conexao = $this->conexaoMySQL->getConn();
    }

    //CREATE
    public function Create(Selecao $selecao)
    {
               
            $sql = 'INSERT INTO selecao (Selecao_Nome) VALUES (?)';

            $insere = Conexao::getConn()->prepare($sql);
            $insere->bindValue(1, $selecao->getselecaoNome());
            
            $insere->execute();
            
            echo "<script>alert('Cadastrado com Sucesso');</script>";
       
            
    }
    //READ
    public function Read(){
        $sql = 'SELECT * FROM selecao';
        $read = Conexao::getConn()->prepare($sql);
        $read->execute();
        
    }
}
