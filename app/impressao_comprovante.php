<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Comprovante de Inscrição</title>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script>
        if (document.addEventListener) {
            document.addEventListener("contextmenu", function(e) {
                e.preventDefault();
                return false;
            });
        } else { //Versões antigas do IE
            document.attachEvent("oncontextmenu", function(e) {
                e = e || window.event;
                e.returnValue = false;
                return false;
            });
        }
    </script>

</head>

<body cz-shortcut-listen="true">
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
        </div>

    </div>
    <?php
    $id = $_GET['cpf'];

    if ($id==0) {
        echo "<script>alert('Informe um CPF no campo');window.location.href = 'comprovante.php';</script>";
    } else {
        include_once '../admin/controller/DAO/conexao.php';
        $sql = "SELECT * FROM candidatos c
        JOIN secretarias se on c.idsecretaria=se.id_sec 
        JOIN cargos ca on c.idcargo=ca.idcargo
        WHERE cpf=?";

        $read = Conexao::getConn()->prepare($sql);
        $read->bindValue(1, $id);
        $read->execute();
        $resultado=$read->rowCount();
        
        if($resultado==1){

        $linha = $read->fetch(PDO::FETCH_OBJ);
        include_once 'view_impressao.php';   
        }else{
            echo "<script>alert('CPF Não inscrito na seleção!');window.location.href = 'comprovante.php';</script>";
        }

    }
    
  
    
    

    
     ?>



</body>

</html>