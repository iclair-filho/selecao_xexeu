<?php
include_once '../admin/controller/DAO/conexao.php';

$id_secretaria = $_REQUEST['secretaria'];
// $id_secretaria = 1;

$sql = "SELECT * FROM cargos WHERE id_sec='$id_secretaria' ORDER BY cargo_nome";
// $sql = 'SELECT * FROM cargos';
$read = Conexao::getConn()->prepare($sql);
$read->execute();

$json_data = array(); //cria o array
foreach ($read as $rec) //foreach loop
{
    $json_array['idcargo']      = $rec['idcargo'];
    $json_array['cargo_nome']    = $rec['cargo_nome'];


    //adiciona os valores ao array
    array_push($json_data, $json_array);

}

//converte os dados no formato JSON
echo json_encode($json_data);


?>




