<?php
session_start();
include './verifica_login.php';
include 'header.php';
?>

<div class="container-fluid m-auto pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb border-3 rounded-2 bg-light p-2">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Candidatos</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-home"><i class="bi bi-person-rolodex me-1"></i>Inscrição de Candidados</h3>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <table class="table table-hover" id="tabela_javascript">
                            <thead>
                                <tr>
                                    <th scope="col-1">Inscrição</th>
                                    <th scope="col-1">Data da Inscrição</th>
                                    <th scope="col-3">CPF</th>
                                    <th scope="col-5">Nome</th>
                                    <th scope="col-3">Endereço</th>
                                    <th scope="col-3">Cidade</th>
                                    <th scope="col-3">Cargo</th>
                                    <th scope="col-2">Valor</th>
                                    <th scope="col-2">Pago</th>
                                    <th class="text-end" scope="col-2">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once '../admin/controller/DAO/conexao.php';
                                $sql = 'SELECT * FROM candidatos c
                                            
                                            JOIN cargos ca on c.idcargo=ca.idcargo
                                            ORDER by c.idCandidato ASC  
                                ';
                                $read = Conexao::getConn()->prepare($sql);
                                $read->execute();
                                
                                if (($read->rowCount())>0) {
                                  $linha = 0;
                                while ($linha = $read->fetch(PDO::FETCH_OBJ)) {
                                    $datainsercao=date('d/m/Y', strtotime($linha->datainsercao));
                                     
                                        echo "<tr>";
                                        echo "<td>$linha->idCandidato</td>";
                                        echo "<td>$datainsercao</td>";
                                        echo "<td>$linha->cpf</td>";
                                        echo "<td><b>$linha->nomecompleto</b></td>";
                                        echo "<td>$linha->endereco, $linha->bairro</td>";
                                        echo "<td>$linha->cidade - $linha->uf</td>";
                                        echo "<td>$linha->cargo_nome</td>";
                                        echo "<td>R$ $linha->modalidade,00</td>";
                                        echo "<td>R$ $linha->vlrpago,00</td>";
                                        echo "<td class='text-end'>";
                                        echo "<a href='cad_candidato.php?id=$linha->idCandidato'><i class='btn btn-outline-primary btn-sm bi bi-menu-app-fill'></i></a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    
                                } 
                                    
                                } else {
                                    echo "<tr>";
                                        echo "<td>";
                                        echo "Não há registros no banco de dados";
                                        echo "</td>";
                                        echo "</tr>";
                                }
                                

                                



                                ?>

                            </tbody>
                            
                        </table>
                    </div>
                </div>

            </div>
        </div>


    </div>



</div>

</div>
</div>


<?php
include_once('footer.php');
?>