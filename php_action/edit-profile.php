<?php
// sessão
session_start();

// conexão
require_once 'db_connect.php';

if( isset( $_POST['btn-edit-profile'] ) ) {

    $id = mysqli_escape_string($connect, $_POST['id']);
    $name = mysqli_escape_string($connect, $_POST['name']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $matricula = mysqli_escape_string($connect, $_POST['matricula']);
    $email = mysqli_escape_string($connect, $_POST['email']);

    $sql = "UPDATE aluno SET nome = '$name', cpf = '$cpf', matricula = '$matricula', email = '$email' WHERE id = '$id'";

    // verificando se a query foi bem sucedida
    if( mysqli_query($connect, $sql) ) {
        header('Location: ../profile.php?Atualido-com-sucesso');
    } else {
        header('Location: ../profile.php?Erro-ao-atualizar');
    }

}