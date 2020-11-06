<?php
require_once 'php_action/db_connect.php';

session_start();

// Verficiando se o usuário está logado
if(!isset($_SESSION['logado'])) {
    header('location: index.php?voce-nao-esta-logado');
}

// Dados do usuário
// $id = $_SESSION['id_user'];
// $sql = "SELECT * FROM aluno WHERE id = '$id'";
// $resultado = mysqli_query($connect, $sql);
// $dados = mysqli_fetch_array($resultado);

$id = $_SESSION['id_user'];
$sql = "SELECT nome FROM curso";
$resultado = mysqli_query($connect, $sql);
$dadosCurso = mysqli_fetch_array($resultado);

// Fechando conexão com o banco de dados
mysqli_close($connect);

include_once 'includes/header.php';
include_once 'includes/menu.php';
?>

<section class="text-center">
    <div class="container">

        <h2 class="page-title"> Minha Grade </h2>

            <?php
                // echo '<pre>';
                // print_r($resultado);
                // echo '</pre>';
            ?>

            <table class="table table-striped table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Horário</th>
                        <th scope="col">Segunda-Feira</th>
                        <th scope="col">Terça-Feira</th>
                        <th scope="col">Quarta-Feira</th>
                        <th scope="col">Quinta-Feira</th>
                        <th scope="col">Sexta-Feira</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">08:00</th>
                        <td><?=  $dadosCurso['nome']; ?></td>
                        <td></td>
                        <td>-</td>
                        <td></td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <th scope="row">09:40</th>
                        <td>-</td>
                        <td></td>
                        <td>-</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row">10:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?=  $dadosCurso['nome']; ?></td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <th scope="row">11:40</th>
                        <td><?=  $dadosCurso['nome']; ?></td>
                        <td>-</td>
                        <td></td>
                        <td>-</td>
                        <td></td>                        
                    </tr>
                </tbody>
            </table>
            
        </div>

    </div>
</section>


<?php
include_once 'includes/footer.php';
?>