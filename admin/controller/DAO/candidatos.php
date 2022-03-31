<?php
define('__DIR__', 'localhost/selecaoxexeu');
class CandidatoDAO
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
    public function Create(Candidato $candidato)
    {
        $search = 'SELECT * FROM candidatos WHERE cpf = ?';
        $search = Conexao::getConn()->prepare($search);
        $search->bindValue(1, $candidato->getCpf());
        $search->execute();
        
        $linha=$search->rowCount();
        
        if ($linha==0) {
        
            $sql = 'INSERT INTO candidatos(cpf, nomecompleto, datanascimento, rg, nis, orgaoemissor, estadocivil, escolaridade, modalidade, sexo, email, cep, endereco, numero, cidade, uf, complemento, bairro, nacionalidade, telefone, celular, idsecretaria, idcargo, portador) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
           

            $insere = Conexao::getConn()->prepare($sql);
            $insere->bindValue(1, $candidato->getCpf());
            $insere->bindValue(2, $candidato->getNomecompleto());
            $insere->bindValue(3, $candidato->getDatanascimento());
            $insere->bindValue(4, $candidato->getRg());
            $insere->bindValue(5, $candidato->getNis());
            $insere->bindValue(6, $candidato->getOrgaoemissor());
            $insere->bindValue(7, $candidato->getEstadocivil());
            $insere->bindValue(8, $candidato->getEscolaridade());
            $insere->bindValue(9, $candidato->getModalidade());
            $insere->bindValue(10, $candidato->getSexo());
            $insere->bindValue(11, $candidato->getEmail());
            $insere->bindValue(12, $candidato->getCep());
            $insere->bindValue(13, $candidato->getEndereco());
            $insere->bindValue(14, $candidato->getNumero());
            $insere->bindValue(15, $candidato->getCidade());
            $insere->bindValue(16, $candidato->getUf());
            $insere->bindValue(17, $candidato->getComplemento());
            $insere->bindValue(18, $candidato->getBairro());
            $insere->bindValue(19, $candidato->getNacionalidade());
            $insere->bindValue(20, $candidato->getTelefone());
            $insere->bindValue(21, $candidato->getCelular());
            $insere->bindValue(22, $candidato->getIdsecretaria());
            $insere->bindValue(23, $candidato->getIdcargo());
            $insere->bindValue(24, $candidato->getPortador());
            
            $res=$insere->execute();
            if ($res=true) {
               echo "<script>alert('Candidato inscrito com Sucesso! Imprima seu comprovante acessando com seu CPF.');window.location.href = '../../app/comprovante.php';</script>";
                // header("Location: ../../app/comprovante.php");
            }
            
            

            
        } else {
            echo "<script>alert('CPF inscrito na seleção!');window.location.href = '../../app/comprovante.php';</script>";
            header('Location: ../../app/comprovante.php');
        }
          
    }

    //READ
    public function Read(){
        $sql = 'SELECT * FROM candidados';
        $read=Conexao::getConn()->prepare($sql);
        $read->execute();
        
    }
    //IMPRIMIR COMPROVANTE



}
