<?php
// Connect Database
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'login_ead_ifto';

$connect = mysqli_connect($servername, $username, $password, $db_name);

// Code DB - uft-8
mysqli_set_charset($connect, "utf8");

// Error DB
if( mysqli_connect_error() ) {
    echo 'Erro na conexão: ' . mysqli_connect_error();
}