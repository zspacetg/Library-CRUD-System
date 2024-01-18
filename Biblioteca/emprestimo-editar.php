<h1>Editar Empréstimo</h1>
<?php
    $sql_1 = "SELECT * FROM emprestimo WHERE livro_id_livro=".$_REQUEST['livro_id_livro'];
    $res_1 = $conn->query($sql_1);
    $row_1 = $res_1->fetch_object();
?>
<form action="?page=emprestimo-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <div class="mb-3">
        <label>Livro</label>
        <select name="livro_id_livro" class="form-control">
			<option>-Selecione-</option>
		<?php
			$sql = "SELECT * FROM livro";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					if($row_1->livro_id_livro == $row->id_livro){
						print "<option value='".$row->id_livro."' selected>".$row->titulo_livro."</option>";
					}else{
						print "<option value='".$row->id_livro."'>".$row->titulo_livro."</option>";
					}					
				}
			}else{
				print "<option>Não há livros!</option>";
			}
		?>
		</select>
    </div>
    <div class="mb-3">
        <label>Usuário</label>
        <select name="usuario_id_usuario" class="form-control">
			<option>-Selecione-</option>
		<?php
			$sql = "SELECT * FROM usuario";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					if($row_1->usuario_id_usuario == $row->id_usuario){
						print "<option value='".$row->id_usuario."' selected>".$row->nome_usuario."</option>";
					}else{
						print "<option value='".$row->id_usuario."'>".$row->nome_usuario."</option>";
					}
				}
			}else{
				print "<option>Não há usuários!</option>";
			}
		?>
		</select>
    </div>
    <div class="mb-3">
        <label>Funcionário</label>
        <select name="funcionario_id_funcionario" class="form-control">
			<option>-Selecione-</option>
		<?php
			$sql = "SELECT * FROM funcionario";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					if($row_1->funcionario_id_funcionario == $row->id_funcionario){
						print "<option value='".$row->id_funcionario."' selected>".$row->nome_funcionario."</option>";
					}else{
						print "<option value='".$row->id_funcionario."'>".$row->nome_funcionario."</option>";
					}
				}		
			}else{
				print "<option>Não há funcionários!</option>";
			}
		?>
		</select>
    </div>
    <div class="mb-3">
        <label>Data do empréstimo</label>
        <input type="date" name="data_emprestimo" class="form-control" value="<?php print $row_1->data_emprestimo; ?>">
    </div>
    <div class="mb-3">
        <label>Data de devolução</label>
        <input type="date" name="data_devolucao" class="form-control" value="<?php print $row_1->data_devolucao; ?>">
    </div>
    <div class="mb-3">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>