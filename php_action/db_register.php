<?php
session_start();

// Connect Database
include_once 'db_connect.php';
// include_once '../register-user.php';

/*
function clear( $input ) {
    global $connect;
    
    // SQL
    $var = mysqli_escape_string($connect, $input);

    // XSS(Cross Site Scripting)
    $var = htmlspecialchars($var);
}*/

// Button Submit
if( isset($_POST['btn-register']) ) {
    // $erros = array();

    $matricula = mysqli_escape_string($connect, $_POST['matricula']);
    $curso = mysqli_escape_string($connect, $_POST['curso']);
    $name = mysqli_escape_string($connect, $_POST['name']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $password = mysqli_escape_string($connect, md5($_POST['password']));

    $sql = "INSERT INTO aluno VALUES (DEFAULT, '$matricula', '$name', '$cpf', '$email', '$password', '$curso')";

    // verificando se a query foi bem sucedida
    if( mysqli_query($connect, $sql) ) {
        header('Location: ../index.php?sucesso');
    } else {
        header('Location: ../index.php?erro');
    }

}