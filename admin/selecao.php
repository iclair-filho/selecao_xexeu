<?php
session_start();
include './verifica_login.php';
include 'header.php';
?>

            <div class="container-fluid m-auto pt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb border-3 rounded-2 bg-light p-2">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Seleção</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-home"><i class="bi bi-briefcase-fill me-1"></i></i>Cadastro de Seleção</h3>
                    </div>
                    <div class="col-md-3 d-inline-flex gap-1 mb-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadselecao">Incluir</button>

                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="col-md-12">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col-1">Concurso</th>
                                                <th class="text-end" scope="col-2">Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Seleção Simplificada 2022</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#editselecao" data-bs-whatever="@mdo"><i class="bi bi-pencil-fill"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delselecao" data-bs-whatever="@mdo"><i class="bi bi-trash-fill"></i></button>

                                                </td>
                                            </tr>

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

    <!-- Modal Cadastro de selecao -->
    <div class="modal fade" id="cadselecao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <form action="controller/selecao_script.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Inclusão de selecao</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="form-group">
                            <label for="">Seleção</label>
                            <input type="text" name="nome_selecao" id="nome_selecao" class="form-control">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Incluir</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edição de selecao -->
    <div class="modal fade" id="editselecao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Edição de selecao</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name">Seleção</label>
                            <input type="text" class="form-control" id="recipient-name" name="nome_selecao">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Incluir</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Delete de selecao -->
    <div class="modal fade" id="delselecao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Exclução de selecao</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Selecao</label>
                            <input type="text" name="nome_selecao" id="nome_selecao" class="form-control">
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