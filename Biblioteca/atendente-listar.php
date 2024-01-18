<h1>Listar Atendente</h1>
<?php
    $sql = "SELECT * FROM funcionario";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    if ($res->num_rows > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print("<table class='table table-hover table-striped table-bordered'>");
            print("<tr>");
            print("<th>#</th>");
            print("<th>Nome</th>");
            print("<th>CPF</th>");
            print("<th>E-mail</th>");
            print("<th>Telefone</th>");
            print("<th>Ações</th>");
            print("</tr>");
        while ($row = $res->fetch_object()){
            print("<tr>");
            print("<td>".$row->id_funcionario."</td>");
            print("<td>".$row->nome_funcionario."</td>");
            print("<td>".$row->cpf_funcionario."</td>");
            print("<td>".$row->email_funcionario."</td>");
            print("<td>".$row->fone_funcionario."</td>");
            print "<td>
						<button onclick=\"location.href='?page=atendente-editar&id_funcionario=".$row->id_funcionario."';\" class='btn btn-success'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=atendente-salvar&acao=excluir&id_funcionario=".$row->id_funcionario."';}else{false;}\" class='btn btn-danger'>Excluir</button> 
				   </td>";
            print("</tr>");
        }
        print("</table>");
    } else {
        print("<p class='alert alert-danger'>Não encontrou resultados!</p>");
    }

?>