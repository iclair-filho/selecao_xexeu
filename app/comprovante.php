<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput-1.1.4.pack.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <title>Inscrição - Seleção Pública</title>
    <!-- BootStrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="../css/styles.css">


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
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Comprovante de Inscrição</h4>
                    </div>
                    <div class="card-body">
                        <form action="impressao_comprovante.php?" method="GET">

                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Informe seu CPF</label>
                                <input type="text" class="form-control" name="cpf" id="cpf">

                            </div>
                            <button type="submit" class="btn btn-success">Imprimir</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-body text-body">
                        <ul>
                        <li>Ao finalizar sua inscrição <strong>NÃO ESQUEÇA DE IMPRIMIR O COMPROVANTE.</strong> É com ele que você irá solicitar a emissão do DAM de pagamento no setor de tributação da Prefeitrua.</li>
                            <li>A emissão do boleto de pagamento deverá ser feita no setor de tributação da Prefeitura
                                Municipal de Xexeu, localizada à <strong>Av. Mário Melo, s/nº, Centro, Xexeu-PE, no
                                    horário das 07:00h as 13:00h de segunda a sexta até o dia 31 de março de
                                    2022.</strong></li>
                            <li>O pagamento da taxa de inscrição poderá ser efetuado até o dia <strong>31 de março de
                                    2022.</strong></li>
</ul>
                        
                    </div>
                </div>

            </div>
        </div>
        <div class="col-3"></div>
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

    <script src="../js/scripts.js"></script>


</body>

</html>