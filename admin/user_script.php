<?php
require_once ('controller/DAO/conexao.php');

$user = 'admin';
$login = 'admin';
$senha = 'adminxexeu';
$conf_senha = 'adminxexeu';

        if ($senha==$conf_senha) {
            $senha1 = md5($senha);
            $sql = "INSERT INTO `tb_usuario` (`user_nome`, `user_pass`) VALUES (NULL, '$login', '$senha1')";
            $inc = mysqli_query($conn, $sql);
         
            
            if ($inc==true) {
                // header('Location: index.php');
            	echo "Usuário cadastro com Sucesso!";
            } else {
            	// echo "Erro ao cadastrar";
                echo "<script>alert('Erro ao Cadastrar Usuário');window.location.href = 'cadusuario.php';</script>";
            }
            
        }

?>