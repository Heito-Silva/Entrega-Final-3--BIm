<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 style="color: #000;" class="modal-title" id="exampleModalLongTitle">EDITE SUAS INFORMAÇÕES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="color: #000;">
                <form action="php_action/edit-profile.php" method="POST">

                    <!-- Com o type="hidden" o input fica invisível -->
                    <input type="hidden" name="id" value="<?= $dados['id']; ?>">

                    Nome:<br>
                    <input type="text" name="name" value="<?= $dados['nome']; ?>"><br><br>

                    CPF:<br>
                    <input type="text" name="cpf" value="<?= $dados['cpf']; ?>"><br><br>

                    Matrícula:<br>
                    <input type="text" name="matricula" value="<?= $dados['matricula']; ?>"><br><br>

                    <!-- <select name="curso">
                        <option>Selecione um curso</option>
                        <option value="100000">Análise e Desenvolvimento de Sistemas</option>
                        <option value="100001">Medicina</option>
                        <option value="100002">Sistema da Informação</option>
                        <option value="100003">Matemática</option>
                        <option value="100004">História</option>
                        <option value="100005">Química</option>
                        <option value="100006">Biologia</option>
                        <option value="100007">Geografia</option>
                    </select><br><br> -->

                    E-mail:<br>
                    <input type="email" name="email" value="<?= $dados['email']; ?>"><br><br>

                    <button type="submit" name="btn-edit-profile" class="btn btn-success">Atualizar</button>

                    <button class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>

                </form>
            </div>
            
        </div>
    </div>
</div>