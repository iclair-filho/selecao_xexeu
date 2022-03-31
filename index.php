<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <title>Inscrição - Seleção Pública</title>
    <!-- BootStrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <style type='text/css'>
        .carregando{
            color: #ff0000;
            display:none;
        }
    </style>


</head>

<body>
    <div class="header-pri">
        <div class="container">
            <div class="row mb-2">
                <div class="col-6">
                    <img id="logo"
                        src="http://site.xexeu.pe.gov.br/wp-content/themes/xexeu/assets/img/logo-horizontal.png" alt="">
                </div>
                <div class="col-6 align-self-end text-end">
                    <h3 class="text-white mb-0">Formulário de Inscrição</h3>
                    <p class="text-white-50">Seleção Simplificada 2022</p>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-light">
                        <form class="container-fluid justify-content-start">
                            <a href="http://site.xexeu.pe.gov.br/inscricoes" class="btn btn-sm btn-secondary me-1" type="button">Inscrição</a>
                            <a href="./app/comprovante.php" class="btn btn-sm btn-secondary me-1" type="button">Comprovante</a>
                            
                        </form>
                    </nav>
                </div>
            </div>

        </div>


    </div>
    <div class="container mt-2 mb-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="admin/controller/cadastro_script.php" method="POST">
                    <div class="mb-1">
                        <div class="card mb-2">
                            <h5 class="card-header">Dados do Candidato</h5>
                            <div class="card-body p-3">
                                <div class="row g-2">

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Secretaria</label>
                                            <select class="form-select form-select-sm" name="secretaria"
                                                id="secretaria">
                                                <option value="">Selecione a Secretaria</option>
                                                <?php
                                        include_once 'admin/controller/DAO/conexao.php';
                                        $sql = 'SELECT * FROM secretarias';
                                        $read = Conexao::getConn()->prepare($sql);
                                        $read->execute();

                                        if (($read->rowCount()) > 0) {
                                            $linha = 0;
                                            while ($linha = $read->fetch(PDO::FETCH_OBJ)) {
                                                echo "<option value='$linha->id_sec'>$linha->sec_nome</option>";
                                            }
                                        }

                                        ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="">Cargo</label>
                                            <select class="form-select form-select-sm" name="cargo" id="cargo">
                                                <option value="">Escolha seu Cargo</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="">Nome Completo</label>
                                            <input type="text" name="nome" id="nome"
                                                class="form-control form-control-sm" required>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Data de Nascimento</label>
                                            <input type="date" name="nascimento" id="nascimento"
                                                class="form-control form-control-sm">

                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">CPF</label>
                                            <input class="form-control form-control-sm" type="text" id="cpf" value=""
                                                name="cpf" required>

                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">NIS</label>
                                            <input class="form-control form-control-sm" type="text" id="nis" value=""
                                                name="nis" required>

                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Identidade(CIVIL/RG)</label>
                                            <input type="text" name="RG" id="RG" class="form-control form-control-sm"
                                                required>

                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Órgão Emissor</label>
                                            <input type="text" name="emissor" id="emissor"
                                                class="form-control form-control-sm" required>

                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Estado Civil</label>
                                            <select class="form-select form-select-sm" name="estadocivil"
                                                id="estadocivil" required>
                                                <option value=""></option>
                                                <option value="solteiro">Solteiro</option>
                                                <option value="casado">Casado</option>
                                                <option value="viuvo">Viúvo</option>
                                                <option value="outros">Outros</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Sexo</label>
                                            <select class="form-select form-select-sm" name="sexo" id="sexo" required>
                                                <option value=""></option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Escolaridade</label>
                                            <select class="form-select form-select-sm" name="escolaridade"
                                                id="escolaridade" required>
                                                <option value=""></option>
                                                <option value="Fundamental (Incompleto)">Fundamental (Incompleto)
                                                </option>
                                                <option value="Fundamental (Completo)">Fundamental (Completo)</option>
                                                <option value="Ensino Médio (Incompleto)">Ensino Médio (Incompleto)
                                                </option>
                                                <option value="Ensino Médio (Completo)">Ensino Médio (Completo)</option>
                                                <option value="Superior (Incompleto)">Superior (Incompleto)</option>
                                                <option value="Superior (Completo)">Superior (Completo)</option>
                                                <option value="Pós-graduado">Pós-graduado</option>
                                                <option value="Doutorado">Doutorado</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Modalidade de Inscrição</label>
                                            <select class="form-select form-select-sm" name="modadelidadeincriacao"
                                                id="modadelidadeincriacao" required>
                                                <option value=""></option>
                                                <option value="50">Fundamental (R$ 50,00)</option>
                                                <option value="60">Ensino Médio (R$ 60,00)</option>
                                                <option value="75">Superior (R$ 75,00)</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-3">
                                        <label for="">Portador de Deficiência?</label>
                                        <select name="portador" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example" require>
                                            <option selected></option>
                                            <option value="1">Não</option>
                                            <option value="2">Sim</option>

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
                                            <input type="text" class="form-control form-control-sm" name="cep" id="cep"
                                                placeholder="Digite só números">

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Endereço Completo</label>
                                            <input type="text" class="form-control form-control-sm" name="logradouro"
                                                id="rua" required>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="form-group">
                                            <label for="">Nº</label>
                                            <input type="text" class="form-control form-control-sm" name="numero"
                                                id="numero" required>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="">Cidade</label>
                                            <input type="text" class="form-control form-control-sm" name="cidade"
                                                id="cidade" required>

                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="form-group">
                                            <label for="">Estado</label>
                                            <select class="form-select form-select-sm" name="estado" id="uf">
                                                <option value=""></option>
                                                <option value="AC">AC</option>
                                                <option value="AL">AL</option>
                                                <option value="AP">AP</option>
                                                <option value="AM">AM</option>
                                                <option value="BA">BA</option>
                                                <option value="CE">CE</option>
                                                <option value="DF">DF</option>
                                                <option value="ES">ES</option>
                                                <option value="GO">GO</option>
                                                <option value="MA">MAo</option>
                                                <option value="MT">MT</option>
                                                <option value="MS">MS</option>
                                                <option value="MG">MG</option>
                                                <option value="PA">PA</option>
                                                <option value="PB">PB</option>
                                                <option value="PR">PR</option>
                                                <option value="PE">PE</option>
                                                <option value="PI">PI</option>
                                                <option value="RJ">RJ</option>
                                                <option value="RN">RN</option>
                                                <option value="RS">RS</option>
                                                <option value="RO">RO</option>
                                                <option value="RR">RR</option>
                                                <option value="SC">SC</option>
                                                <option value="SP">SP</option>
                                                <option value="SE">SE</option>
                                                <option value="TO">TO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Complemento</label>
                                            <input type="text" class="form-control form-control-sm" name="complemento"
                                                id="complemento">

                                        </div>
                                    </div>


                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Bairro</label>
                                            <input type="text" class="form-control form-control-sm" name="bairro"
                                                id="bairro" required>

                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Nacionalidade</label>
                                            <select class="form-select form-select-sm" name="nacionalidade"
                                                id="nacionalidade">
                                                <option value=""></option>
                                                <option value="brasileira">Brasileira</option>
                                                <option value="estrangeira">Estrangeira</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Telefone</label>
                                            <input type="tel" class="form-control form-control-sm" name="telefone"
                                                id="telefone" placeholder="(99)9999-9999">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Celular</label>
                                            <input type="tel" class="form-control form-control-sm" name="celular"
                                                id="celular" placeholder="(99)99999-9999" require>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control form-control-sm" name="email"
                                                id="email" required>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="card mt-1">
                        <div class="card-body bg-danger ">

                            <div class="row ">
                                <div class="col-12 ">
                                    <p class="text-center text-light pe-4 ps-4 ">Ao finalizar sua inscrição <span
                                            id="spam_inscricao">NÃO ESQUEÇA DE IMPRIMIR O COMPROVANTE.</span> É com ele
                                        que
                                        você
                                        irá solicitar a emissão do DAM de pagamento no setor de tributação da
                                        Prefeitrua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row pe-3 ps-3 ">
                        <button type="button " class="btn btn-primary btn-lg btn-block ">Enviar</button>
                    </div>


                </form>
            </div>
            <div class="col-1"></div>
        </div>



    </div>








    <!-- JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js "
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p "
        crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js "
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF "
        crossorigin="anonymous "></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("jquery", "3.6.0");
    </script>

    <script src="js/scripts.js"></script>


    <script type="text/javascript">
        $(function () {
            $('#secretaria').change(function () {
                if ($(this).val()) {
                    $('#cargo').hide();
                    $('.carregando').show();
                    $.getJSON('app/cargos_post.php?search=', { secretaria: $(this).val(), ajax: 'true' }, function (j) {
                        var options = '<option value="">Escolha o Cargo</option>';
                        for (var i = 0; i < j.length; i++) {
                            options += '<option value="' + j[i].idcargo + '">' + j[i].cargo_nome + '</option>';
                        }
                        $('#cargo').html(options).show();
                        $('.carregando').hide();
                    });
                } else {
                    $('#cargo').html('<option value="">– Escolha seu Cargo –</option>');
                }
            });
        });
    </script>

</body>

</html>