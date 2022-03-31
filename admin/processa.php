<?php
    session_start();
            // Importando as classes de conexão
    require_once ('controller/DAO/conexao.php');
    
            //Instâncias do objetos de conexão
            // $this->conexaoMySQL = new Conexao();
    
            //Abrir a conexão com o BD
            // $this->conexao = $this->conexaoMySQL->getConn();

    $nome = $_POST['user'];
    $pass = $_POST['password'];


    // $query = "SELECT * FROM `tb_usuario` WHERE `user_nome`='$nome' AND `user_pass`=md5('$pass')";

    // resultado , mysqli_query (conexão, consulta sql)

    // $read = Conexao::getConn()->prepare($query);

    // $read->execute();


    // número de linhas encontradas na query
    // $linha=$search->rowCount();

    // empty = se a variável for vazia
    if (empty($nome) || empty ($pass)) {
        header('Location:index.php');
    }

    if ($nome='admin' && $pass='admin') {
        $_SESSION ['user'] = $nome;
        // header('Location: admin/index.php');
        echo "<script>alert('Seja bem vindos!');window.location.href = 'dashboard.php';</script>";
        
    } else {
        echo "<script>alert('Usuário ou senha inválida');window.location.href = 'index.php';</script>";
        // header('Location: index.php');
        
    }


?>
