<?php
session_start();
include './verifica_login.php';
include 'header.php';
?>

            <div class="container-fluid m-auto pt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb border-3 rounded-2 bg-light p-2">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cargos</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-home"><i class="bi bi-briefcase-fill me-1"></i></i>Cadastro de Cargos</h3>
                    </div>
                    <div class="col-md-3 d-inline-flex gap-1 mb-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadcargos">Incluir</button>

                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="col-md-12">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col-1">Concurso</th>
                                                <th scope="col-3">Cargo</th>
                                                <th class="text-end" scope="col-2">Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            include_once '../admin/controller/DAO/conexao.php';
                                            $sql = 'SELECT * FROM cargos c JOIN selecao s on c.idselecao=s.idselec';
                                            $read = Conexao::getConn()->prepare($sql);
                                            $read->execute();
                                            
                                            if (($read->rowCount())>0) {
                                                $linha = 0;
                                              while ($linha = $read->fetch(PDO::FETCH_OBJ)) {
                                                  
                                                echo "<tr>";
                                                echo "<td>$linha->selecao_nome</td>";
                                                echo "<td>$linha->cargo_nome</td>";
                                                echo "<td class='text-end'>";
                                                    echo "<button type='button' class='btn btn-info btn-sm' data-bs-toggle='modal' data-bs-target='#editcargos' data-bs-whatever='@mdo'><i class='bi bi-pencil-fill'></i></button>";
                                                    echo "<button type='button' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#delcargos' data-bs-whatever='@mdo'><i class='bi bi-trash-fill'></i></button>";

                                                echo "</td>";
                                            echo "</tr>";
                                              }
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

    <!-- Modal Cadastro de Cargos -->
    <div class="modal fade" id="cadcargos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <form action="controller/cargo_script.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Inclusão de Cargos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Concurso</label>
                            <select class="form-control form-select" name="concurso" id="concurso">
                            <option value=""></option>
                            <option value="1">Seleção Simplificada 2022</option>
                            
                          </select>
                        </div>

                        <div class="form-group">
                            <label for="">Cargo</label>
                            <input type="text" name="nome_cargo" id="nome_cargo" class="form-control">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Incluir</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edição de Cargos -->
    <div class="modal fade" id="editcargos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Edição de Cargos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Concurso</label>
                            <select class="form-control form-select" name="concurso" id="concurso">
                                <option value=""></option>
                                <option value="">Seleção Simplificada 2022</option>
                                
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name">Cargo</label>
                            <input type="text" class="form-control" id="recipient-name" name="nome_cargo">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Incluir</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Delete de Cargos -->
    <div class="modal fade" id="delcargos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Exclução de Cargos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Concurso</label>
                            <select class="form-control form-select" name="concurso" id="concurso">
                                    <option value=""></option>
                                    <option value="">Seleção Simplificada 2022</option>
                                    
                                  </select>
                        </div>

                        <div class="form-group">
                            <label for="">Cargo</label>
                            <input type="text" name="nome_cargo" id="nome_cargo" class="form-control">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Excluir</button>

                    </div>
                </form>
            </div>
        </div>
    </div>



    <?php
include_once('footer.php');
?>