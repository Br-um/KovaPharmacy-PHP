<?php
    include('../model/conn.php');
    include('../model/user_model.php');

    $userModel = new User();
    $userModel->setFName($_POST['fName']);
    $userModel->setLName($_POST['lName']);
    $userModel->setEmail($_POST['email']);
    $userModel->setPassword($_POST['password']);

    $fName = $userModel->getFName();
    $lName = $userModel->getLName();
    $email = $userModel->getEmail();
    $password = $userModel->getPassword();

    $sql = "INSERT INTO usuarios (nome, email, senha, sobrenome) VALUES ('$fName', '$email', '$password', '$lName')";
    $exist = "SELECT * FROM usuarios WHERE email = '$email'"; 
    $queryexist = mysqli_query($conn, $exist);
    $rows = mysqli_num_rows($queryexist);
    $error = "Erro na validação ou email ja existente";

    if($userModel->validate() && $rows < 1):
        mysqli_query($conn, $sql);
        header('Location: ../index.php');
    else:
        header('Location: ../index.php?validation='.$error);
    endif;
