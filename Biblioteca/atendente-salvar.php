<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $sql = "INSERT INTO funcionario (
                        id_funcionario,
                        nome_funcionario,
                        cpf_funcionario,
                        email_funcionario,
                        fone_funcionario
                    ) VALUES (
                        '".$_POST["id_funcionario"]."', 
                        '".$_POST["nome_funcionario"]."',
                        '".$_POST["cpf_funcionario"]."',
                        '".$_POST["email_funcionario"]."',
                        '".$_POST["telefone_funcionario"]."'
                    )";

            $res = $conn->query($sql);
            
            if ($res==true){
                print("<script>alert('Cadastro com sucesso');</script>");
                print("<script>location.href='?page=atendente-listar';</script>");
            }else{
                print("<script>alert('Não foi possível');</script>");
                print("<script>location.href='?page=atendente-listar';</script>");
            }
            break;
            
        case 'editar':
            $sql = "UPDATE funcionario SET
                        id_funcionario=".$_POST['id_funcionario'].",
						nome_funcionario='".$_POST['nome_funcionario']."',
						cpf_funcionario='".$_POST['cpf_funcionario']."',
						email_funcionario='".$_POST['email_funcionario']."',
						fone_funcionario='".$_POST['telefone_funcionario']."'
					WHERE
						id_funcionario=".$_POST['id_funcionario'];


            $res = $conn->query($sql);
            
            if ($res==true){
                print("<script>alert('Editou com sucesso');</script>");
                print("<script>location.href='?page=atendente-listar';</script>");
            }else{
                print("<script>alert('Não foi possível');</script>");
                print("<script>location.href='?page=atendente-listar';</script>");
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM funcionario WHERE id_funcionario=".$_REQUEST["id_funcionario"];

            $res = $conn->query($sql);
            
            if ($res==true){
                print("<script>alert('Excluído com sucesso');</script>");
                print("<script>location.href='?page=atendente-listar';</script>");
            }else{
                print("<script>alert('Não foi possível');</script>");
                print("<script>location.href='?page=atendente-listar';</script>");
            }
            break;
        default:
        
            break;
    }
?>