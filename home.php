<?php
require_once 'php_action/db_connect.php';

session_start();

// Verficiando se o usuário está logado
if(!isset($_SESSION['logado'])) {
    header('location: index.php?voce-nao-esta-logado');
}

// Dados do usuário
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM aluno WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

// Fechando conexão com o banco de dados
mysqli_close($connect);

include_once 'includes/header.php';
include_once 'includes/menu.php';
?>

<section class="text-center" id="content_section1">

    <h2 class="page-title">Olá, bem-vindo <?= $dados['nome']; ?>! </h2>

    <!-- <iframe width="760" height="515" src="https://www.youtube.com/embed/videoseries?list=PLwXQLZ3FdTVEITn849NlfI9BGY-hk1wkq" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <p>Deseja acessar sua atividade?</p>
    <a href="atividade.php" class="btn btn-outline-success mb-5">Acessar Atividade</a>

</section>

<?php include_once 'includes/footer.php'; ?>