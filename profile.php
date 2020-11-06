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

<section class="text-center">
    <div class="container">
        <h2 class="page-title"> Perfil </h2>

        <div class="info_perfil">
            <p> Nome: <?= $dados['nome']; ?> </p>

            <p> CPF: <?= $dados['cpf']; ?> </p>

            <p> Matrícula: <?= $dados['matricula']; ?> </p>

            <p> E-mail: <?= $dados['email']; ?> </p>

            <div class="row d-flex justify-content-center my-5">
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"> Editar Informações </button>

                <button class="btn btn-outline-danger ml-3" data-toggle="modal" data-target="#delete_user"> Deletar Conta </button>

                <?php
                    include_once 'includes/modal/edit-profile.php';
                    include_once 'includes/modal/delete-user.php';
                ?>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>