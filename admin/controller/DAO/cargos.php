<?php
class CargosDAO
{
    public function __construct()
    {
        // Importando as classes de conexão
        require_once('conexao.php');
        require_once('./model/candidatos.php');

        //Instâncias do objetos de conexão
        $this->conexaoMySQL = new Conexao();

        //Abrir a conexão com o BD
        $this->conexao = $this->conexaoMySQL->getConn();
    }

    //CREATE
    public function Create(Cargo $cargo)
    {
               
            $sql = 'INSERT INTO cargos (idselecao, Cargo_nome) VALUES (?,?)';

            $insere = Conexao::getConn()->prepare($sql);
            $insere->bindValue(1, $cargo->getIdSelecao());
            $insere->bindValue(2, $cargo->getcargoNome());
            
            $insere->execute();
            
            echo "<script>alert('Cadastrado com Sucesso');</script>";
       
    }
}
