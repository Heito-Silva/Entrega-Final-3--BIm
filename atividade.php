<?php
require_once 'php_action/db_connect.php';

session_start();

// Verficiando se o usuário está logado
if(!isset($_SESSION['logado'])) {
    header('location: index.php?voce-nao-esta-logado');
}

include_once 'includes/header.php';
include_once 'includes/menu.php';

if( isset($_POST['btn-atividade']) ) {

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $resposta1 = mysqli_escape_string($connect, $_POST['resposta1']);
    $resposta2 = mysqli_escape_string($connect, $_POST['resposta2']);
    $resposta3 = mysqli_escape_string($connect, $_POST['resposta3']);
    $resposta4 = mysqli_escape_string($connect, $_POST['resposta4']);
    $resposta5 = mysqli_escape_string($connect, $_POST['resposta5']);
    $resposta6 = mysqli_escape_string($connect, $_POST['resposta6']);
    $resposta7 = mysqli_escape_string($connect, $_POST['resposta7']);

    $sql = "INSERT INTO atividade VALUES (DEFAULT, '$nome', '$resposta1', '$resposta2', '$resposta3', '$resposta4', '$resposta5', '$resposta6', '$resposta7')";

    if( mysqli_query($connect, $sql) ) {
        header('Location: atividade.php?deu-certo');
    } else {
        header('Location: atividade.php?deu-errado');
    }
}
?>

<section class="mt-5 mb-5">
    <div class="container">

        <form action="" method="POST">
            <p class="mb-0">Seu nome:</p>
            <input class="mb-3" type="text" name="nome">

            <p>
                1- As células eucariontes podem ser classificadas em dois grupos principais: 
                células animais e células vegetais. Essas últimas apresentam algumas estruturas 
                exclusivas, tais como os cloroplastos, que são responsáveis pelo processo de fotossíntese. 
                Analise as alternativas a seguir e marque a única estrutura que não pode ser utilizada para 
                diferenciar uma célula vegetal da animal.
            </p>
            <select name="resposta1" class="mb-3">
                <option value="">Selecione a resposta</option>
                <option value="A">A) cromoplastos</option>
                <option value="B">B) leucoplastos</option>
                <option value="C">C) Vacúolo de suco celular</option>
                <option value="D">D) Mitocôndria</option>
                <option value="E">E) Parede celular</option>
            </select><br><br>

            <p>
                2- <b>MySQL realiza comparações de acordo com as seguintes regras:</b>

                I. Se um ou ambos os argumentos são NULL, o resultado da comparação é NULL, exceto para o operador <=>.
                II. Se ambos os argumentos em uma comparação são strings, eles são comparados como strings.
                III. Valores hexadecimais são tratados como strings binárias, se não comparadas a um número.
                IV. Se um dos argumentos é uma coluna TIMESTAMP ou DATETIME e o outro argumento é uma constante, a constante é convertida para um timestamp antes da comparação ser realizada.
            </p>
            <select name="resposta2" class="mb-3">
                <option value="">Selecione a resposta</option>
                <option value="A">A) I</option>
                <option value="B">B) I, II, IV</option>
                <option value="C">C) I, III, IV</option>
                <option value="D">D) IV</option>
                <option value="E">E) I, II, III, IV</option>
            </select><br><br>

            <p>
                3- Encontrada principalmente em sementes oleaginosas, essa organela converte 
                lipídios em açúcares. Marque a alternativa que indica corretamente o nome 
                da organela a que a afirmação se refere.
            </p>
            <select name="resposta3" class="mb-3">
                <option value="">Selecione a resposta</option>
                <option value="A">A) Vacúolo</option>
                <option value="B">B) Peroxissomo</option>
                <option value="C">C) Plastídio</option>
                <option value="D">D) Glioxissomo</option>
                <option value="E">E) Lisossomo</option>
            </select><br><br>

            <p>
                4- Num clube, dentre os 500 inscritos no departamento de natação, 30 são unicamente 
                nadadores, entretento 310 também jogam futebol e 250 também jogam tênis. Os inscritos 
                em natação que também praticam futebol e tenis são em número de:
            </p>
            <select name="resposta4" class="mb-3">
                <option value="">Selecione a resposta</option>
                <option value="A">A) 80</option>
                <option value="B">B) 90</option>
                <option value="C">C) 100</option>
                <option value="D">D) 110</option>
                <option value="E">E) 120</option>
            </select><br><br>

            <p>
                5- Dentre os tipos existentes de migração, conforme a classificação que tem como critério 
                o tempo de permanência do migrante no local de destino, aquela que se caracteriza pela 
                migração diária realizada por qualquer pessoa em seu cotidiano é:
            </p>
            <select name="resposta5" class="mb-3">
                <option value="">Selecione a resposta</option>
                <option value="A">A) Migração rotineira</option>
                <option value="B">B) Migração Sazonal</option>
                <option value="C">C) Migração cotidiana</option>
                <option value="D">D) Migração pluritópica</option>
                <option value="E">E) Migração pendular</option>
            </select><br><br>

            <p>
                6- A preocupação com o efeito estufa tem sido cada vez mais notada. Em alguns dias 
                do verão de 2009, a temperatura na cidade de São Paulo chegou a atingir 34 ºC. 
                O valor dessa temperatura em escala Kelvin é:
            </p>
            <select name="resposta6" class="mb-3">
                <option value="">Selecione a resposta</option>
                <option value="A">A) 239,15</option>
                <option value="B">B) 307,15</option>
                <option value="C">C) 273,15</option>
                <option value="D">D) 1,91</option>
                <option value="E">E) – 307,15</option>
            </select><br><br>

            <p>
                7- Se compararmos a idade do planeta Terra, avaliada em quatro e meio bilhões de anos 
                (4,5∙109 anos), com a de uma pessoa de 45 anos, então, quando começaram a florescer 
                os primeiros vegetais, a Terra já teria 42 anos. Ela só conviveu com o homem moderno 
                nas últimas quatro horas e, há cerca de uma hora, viu-o começar a plantar e a colher. 
                Há menos de um minuto percebeu o ruído de máquinas e de indústrias e, como denuncia 
                uma ONG de defesa do meio ambiente, foi nesses últimos sessenta segundos que se 
                produziu todo o lixo do planeta! O texto permite concluir que a agricultura começou 
                a ser praticada há cerca de
            </p>
            <select name="resposta7" class="mb-3">
                <option value="">Selecione a resposta</option>
                <option value="A">A) 365 anos</option>
                <option value="B">B) 460 anos</option>
                <option value="C">C) 900 anos</option>
                <option value="D">D) 10.000 anos</option>
                <option value="E">E) 460.000 anos</option>
            </select><br><br>

            <button class="btn btn-outline-success" type="submit" name="btn-atividade">Enviar Respostas</button>
        </form>

    </div>
</section>

<section>
    <div class="container">
        <?php
            $sql = "SELECT * FROM atividade WHERE nome = 'Gabarito'";
            $resultado = mysqli_query($connect, $sql);
            $dados = mysqli_fetch_array($resultado);
        ?>

        <h3>GABARITO:</h3>
        <p>Questão 1: <?= $dados['resposta1']; ?></p>
        <p>Questão 2: <?= $dados['resposta2']; ?></p>
        <p>Questão 3: <?= $dados['resposta3']; ?></p>
        <p>Questão 4: <?= $dados['resposta4']; ?></p>
        <p>Questão 5: <?= $dados['resposta5']; ?></p>
        <p>Questão 6: <?= $dados['resposta6']; ?></p>
        <p>Questão 7: <?= $dados['resposta7']; ?></p>
    </div>
</section>

<?php include_once 'includes/footer.php'; ?>