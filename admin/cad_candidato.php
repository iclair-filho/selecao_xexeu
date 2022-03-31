<?php
session_start();
include './verifica_login.php';
include 'header.php';
?>


<?php

$id = $_GET['id'];
include_once '../admin/controller/DAO/conexao.php';
$sql = 'SELECT * FROM candidatos c
    JOIN secretarias se on c.idsecretaria=se.id_sec
    JOIN cargos ca on c.idcargo=ca.idcargo
    WHERE idCandidato=?  
    ';
$read = Conexao::getConn()->prepare($sql);
$read->bindValue(1, $id);
$read->execute();
$linha = $read->fetch(PDO::FETCH_OBJ);
?>

<div class="container-fluid mt-2 mb-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb border-3 rounded-2 bg-light p-2">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro de Candidado</li>
        </ol>
    </nav>

    <form action="" method="POST">
        <div class="mb-1">
            <div class="card mb-2">
                <div class="card-header mb-0 d-flex justify-content-between">
                    <div>
                       <h5 class="text">Dados do Candidato</h5>
                        
                    </div>
                    
                    <div>
                       <h5>Inscrição nº: <?php echo $linha->idCandidato;?></h5> 
                        <p>Data da Inscrição: <?php echo $linha->datainsercao;?></p>  
                    </div> 
                    
                </div>
                <div class="card-body p-3">
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Secretaria:</label>
                                <select class="form-select form-select-sm" name="concurso" id="concurso" disabled>
                                    <option value="<?php echo $linha->idsecretaria; ?>"><?php echo $linha->sec_nome; ?></option>




                                </select>
                            </div>
                        </div>
                        <div class="col-6">


                            <div class="form-group">
                                <label for="">Cargo</label>
                                <select class="form-select form-select-sm" name="cargo" id="cargo" disabled>
                                    <option value="<?php echo $linha->idcargo; ?>"><?php echo $linha->cargo_nome; ?></option>


                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="form-control form-control-sm" value="<?php echo $linha->nomecompleto; ?>" disabled>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">CPF</label>
                                <input class="form-control form-control-sm" type="text" id="cpf" value="<?php echo $linha->cpf; ?>" name="cpf" disabled>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Data de Nascimento</label>
                                <input type="date" name="nascimento" id="nascimento" class="form-control form-control-sm" value="<?php echo $linha->datanascimento; ?>" disabled>

                            </div>
                        </div>
                        
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Identidade(CIVIL/RG)</label>
                                <input type="text" name="RG" id="RG" class="form-control form-control-sm" value="<?php echo $linha->rg; ?>" disabled>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Número do Nis</label>
                                <input type="text" name="nis" id="nis" class="form-control form-control-sm" value="<?php echo $linha->nis; ?>" disabled>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Órgão Emissor</label>
                                <input type="text" name="emissor" id="emissor" class="form-control form-control-sm" value="<?php echo $linha->orgaoemissor; ?>" disabled>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Estado Civil</label>
                                <select class="form-select-sm form-select" name="estadocivil" id="estadocivil" disabled>
                                    <option selected value="<?php echo $linha->estadocivil; ?>"><?php echo $linha->estadocivil; ?></option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Escolaridade</label>
                                <select class="form-select-sm form-select" name="escolaridade" id="escolaridade" disabled>
                                    <option value="<?php echo $linha->escolaridade; ?>"><?php echo $linha->escolaridade; ?></option>


                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Modalidade de Inscriçao</label>
                                <select class="form-select-sm form-select" name="modadelidadeincriacao" id="modadelidadeincriacao" disabled>
                                    <option value="<?php echo $linha->modalidade; ?>">
                                        <?php

                                        $mod = $linha->modalidade;
                                        if ($mod == 50) {
                                            echo "Fundamental (R$ 50,00)";
                                        } elseif ($mod == 60) {
                                            echo "Ensino Médio (R$ 60,00)";
                                        } elseif ($mod == 75) {
                                           echo "Superior (R$ 75,00)";
                                        }
                                        ?>
                                    </option>

                                </select>
                            </div>
                        </div>
                        
                        <div class="col-2">
                            <div class="form-group">
                                <label for="">Sexo</label>
                                <select class="form-select-sm form-select" name="sexo" id="sexo" disabled>
                                    <option value="<?php echo $linha->sexo; ?>">
                                        <?php

                                        $sex = $linha->sexo;
                                        if ($sex === 'M') {
                                            echo "Masculino";
                                        } elseif ($sex==='F') {
                                            echo "Feminino";
                                        }
                                        ?>
                                    </option>
                                    

                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="">Portador de Deficiência?</label>
                            <select name="portador" class="form-select form-select-sm" aria-label=".form-select-sm example" disabled>
                            <option value="<?php echo $linha->portador; ?>">
                                        <?php

                                        $def = $linha->portador;
                                        if ($def === '1') {
                                            echo "Não";
                                        } elseif ($def==='2') {
                                            echo "Sim";
                                        }
                                        ?>
                                    </option>
                                
                            </select>
                        </div>


                    </div>
                </div>
            </div>

            <div class="card mt-2">
                <h5 class="card-header">Endereço e Contatos</h5>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-2">
                            <div class="form-group">
                                <label for="">CEP</label>
                                <input type="text" class="form-control form-control-sm" name="cep" id="cep" value="<?php echo $linha->cep;?>" disabled>

                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="">Endereço Completo</label>
                                <input type="text" class="form-control form-control-sm" name="logradouro" id="rua" value="<?php echo $linha->endereco;?>" disabled>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="form-group">
                                <label for="">Nº</label>
                                <input type="text" class="form-control form-control-sm" name="numero" id="numero" value="<?php echo $linha->numero;?>" disabled>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Cidade</label>
                                <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" value="<?php echo $linha->cidade;?>" disabled>

                            </div>
                        </div>
                        <div class="col-1">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <select class="form-select-sm form-select" name="estado" id="uf" disabled>
                                    <option value="<?php echo $linha->uf;?>"><?php echo $linha->uf;?></option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Complemento</label>
                                <input type="text" class="form-control form-control-sm" name="complemento" id="complemento" value="<?php echo $linha->complemento;?>" disabled>

                            </div>
                        </div>


                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Bairro</label>
                                <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" value="<?php echo $linha->bairro;?>" disabled>

                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Nacionalidade</label>
                                <select class="form-select-sm form-select" name="nacionalidade" id="nacionalidade" disabled>
                                    <option value="<?php echo $linha->nacionalidade;?>"><?php echo $linha->nacionalidade;?></option>
                                    <option value="brasileira">Brasileira</option>
                                    <option value="estrangeira">Estrangeira</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Telefone</label>
                                <input type="tel" class="form-control form-control-sm" name="telefone" id="telefone" value="<?php echo $linha->telefone;?>" disabled>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Celular</label>
                                <input type="tel" class="form-control form-control-sm" name="celular" id="celular" value="<?php echo $linha->celular;?>" disabled>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email" value="<?php echo $linha->email; ?>" disabled>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>

        <div class="row pe-3 ps-3 ">
            <div class="col-md-3">
            <a href="../admin/dashboard.php">
            <button type="button" class="btn btn-info">Voltar</button></a>
            </div>
            
        </div>


    </form>
</div>


<?php
include_once('footer.php');
?>