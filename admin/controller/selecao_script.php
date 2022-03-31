<?php
require_once ('DAO/selecao.php');
require ('model/selecao.php');

//Coletando informações do formulario

$selecao = new Selecao;

$selecao->setselecaoNome($_POST['nome_selecao']);

//Inserindo valores no banco de dados pela Função

$selecao_new = new SelecaoDAO;
$selecao_new->Create($selecao);

