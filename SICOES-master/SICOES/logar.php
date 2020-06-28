<?php
    include_once('./conexao.php');

    if(empty($_POST['login']) || empty($_POST['senha'])){
        header('Location: login.html');
        exit();
    }

    $login = mysqli_real_escape_string($con,$_POST['login']);
    $senha = mysqli_real_escape_string($con,$_POST['senha']);

    $query = "SELECT login FROM usuario WHERE login = 'wagnerzunz' and senha = 123;";

    $result = mysqli_query($con, $query);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION('Location: servicos.html');
        header('Location: login.php');
        exit();
    }else{
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }
?>