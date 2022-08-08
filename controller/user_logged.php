<?php
    session_start();
    include('../model/conn.php');
    include('../model/user_model.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT email, senha FROM usuarios WHERE email = '$email' AND senha = '$password'";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);
    $result = mysqli_fetch_assoc($query);
    $err = "Email ou Senha inválidos";
    if($rows != 1){
        header('Location: ../index.php?log='.$err);
    }else{
        $_SESSION['usuario'] = serialize($result);
        header('Location: ../index.php');
    }
?>