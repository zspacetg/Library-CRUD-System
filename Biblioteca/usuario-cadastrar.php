<h1>Cadastrar Usuário</h1>
<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf_usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email_usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="data_nasc_usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="telefone_usuario" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>