<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    CADASTRO DE ALUNO
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="color: #000;">
                <form action="php_action/db_register.php" method="POST">

                    <!-- <input type="hidden" name="id"> -->

                    <input type="text" name="name" placeholder="Nome:"><br><br>

                    <input type="text" name="cpf" placeholder="CPF:"><br><br>

                    <input type="text" name="matricula" placeholder="Matrícula:"><br><br>

                    <select name="curso">
                        <option>Selecione um curso</option>
                        <option value="100000">Análise e Desenvolvimento de Sistemas</option>
                        <option value="100001">Medicina</option>
                        <option value="100002">Sistema da Informação</option>
                        <option value="100003">Matemática</option>
                        <option value="100004">História</option>
                        <option value="100005">Química</option>
                        <option value="100006">Biologia</option>
                        <option value="100007">Geografia</option>
                    </select><br><br>

                    <input type="email" name="email" placeholder="E-mail:"><br><br>

                    <input type="password" name="password" placeholder="Senha:"><br><br>

                    <button type="submit" name="btn-register">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>