<?php
require_once ('DAO/cargos.php');
require ('model/cargos.php');

//Coletando informações do formulario

$cargo = new Cargo;

$cargo->setIdSelecao($_POST['concurso']);
$cargo->setcargoNome($_POST['nome_cargo']);

//Inserindo valores no banco de dados pela Função

$cargo_new = new CargosDAO;
$cargo_new->Create($cargo);

