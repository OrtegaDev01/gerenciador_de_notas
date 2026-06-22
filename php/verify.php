<?php
    session_start();
    require_once "connection.php";
    $login = $_POST["cxlogin"];
    $pass = $_POST["cxpass"];

    $linha = "select * from usuarios";
    $comando = $conexao->prepare("select * from usuarios");
    $comando->execute();
    $_SESSION["login"] = "";
    $usuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
    foreach($usuarios as $usuario){
        if($usuario["login"] == $login){
            if($usuario["senha"] == $pass){
                $_SESSION["login"] = $login;
            }
        }
    }
    if($_SESSION["login"] != ""){
        echo "<script>alert('Bem-vindo(a)!'); window.location = 'home.php'; </script>";
    } else {
        echo "<script>alert('Erro! Login ou senha incorretos!'); window.location = '../index.php';</script>";
    }
    
?>