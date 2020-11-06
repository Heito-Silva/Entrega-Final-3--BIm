<?php
require_once 'php_action/db_connect.php';

session_start();

// Verficiando se o usuário está logado
if(!isset($_SESSION['logado'])) {
    header('location: index.php?voce-nao-esta-logado');
}

include_once 'includes/header.php';
include_once 'includes/menu.php';
?>

<section class="text-center">
    <div class="container">

        <h2 class="page-title"> Lista de professores </h2>

        <table class="table table-sm table-dark">
            <thead>
                <tr>
                    <th scope="col">Código:</th>
                    <th scope="col">Nome:</th>
                    <th scope="col">CPF:</th>
                    <th scope="col">Curso:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql = "SELECT * FROM professor GROUP BY nome";
                    $resultado = mysqli_query($connect, $sql);
                        
                    if( mysqli_num_rows($resultado) > 0 ):

                        // Loop para aprensentar as informações
                        while($dados = mysqli_fetch_array($resultado)):
                ?>

                    <tr>
                        <td scope="row"><?= $dados['codigo']; ?></td>
                        <td><?= $dados['nome']; ?></td>
                        <td><?= $dados['cpf']; ?></td>
                        <td><?= $dados['curso_codigo']; ?></td>
                    </tr>

                <?php
                    endwhile;

                    else:
                ?>

                    <tr>
                        <td scope="row"> - </td>
                        <td> - </td>
                        <td> - </td>
                        <td> - </td>
                    </tr>

                <?php
                    endif;
                ?>
            </tbody>
        </table>

    </div>
</section>


<?php
// Fechando conexão com o banco de dados
mysqli_close($connect);

include_once 'includes/footer.php';
?>