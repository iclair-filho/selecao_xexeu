<?php
require_once ('DAO/candidatos.php');
require ('model/candidatos.php');

//Coletando informações do formulario

$candidato = new Candidato;

$candidato->setNomecompleto($_POST['nome']);
$candidato->setDatanascimento($_POST['nascimento']);
$candidato->setCpf($_POST['cpf']);
$candidato->setRg($_POST['RG']);
$candidato->setNis($_POST['nis']);
$candidato->setOrgaoemissor($_POST['emissor']);
$candidato->setEstadocivil($_POST['estadocivil']);
$candidato->setEscolaridade($_POST['escolaridade']);
$candidato->setModalidade($_POST['modadelidadeincriacao']);
$candidato->setSexo($_POST['sexo']);
$candidato->setEmail($_POST['email']);
$candidato->setCep($_POST['cep']);
$candidato->setEndereco($_POST['logradouro']);
$candidato->setNumero($_POST['numero']);
$candidato->setCidade($_POST['cidade']);
$candidato->setUf($_POST['estado']);
$candidato->setComplemento($_POST['complemento']);
$candidato->setBairro($_POST['bairro']);
$candidato->setNacionalidade($_POST['nacionalidade']);
$candidato->setTelefone($_POST['telefone']);
$candidato->setCelular($_POST['celular']);
$candidato->setIdsecretaria($_POST['secretaria']);
$candidato->setIdcargo($_POST['cargo']);
$candidato->setPortador($_POST['portador']);


//Inserindo valores no banco de dados pela Função

$candidato_new = new CandidatoDAO;
$candidato_new->Create($candidato);


