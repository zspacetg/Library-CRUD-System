<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $sql = "INSERT INTO usuario (
                        id_usuario,
                        nome_usuario,
                        cpf_usuario,
                        data_nasc_usuario,
                        email_usuario,
                        fone_usuario
                    ) VALUES (
                        '".$_POST["id_usuario"]."', 
                        '".$_POST["nome_usuario"]."',
                        '".$_POST["cpf_usuario"]."',
                        '".$_POST["data_nasc_usuario"]."',
                        '".$_POST["email_usuario"]."',
                        '".$_POST["telefone_usuario"]."'
                    )";

            $res = $conn->query($sql);
            
            if ($res==true){
                print("<script>alert('Cadastro com sucesso');</script>");
                print("<script>location.href='?page=usuario-listar';</script>");
            }else{
                print("<script>alert('Não foi possível');</script>");
                print("<script>location.href='?page=usuario-listar';</script>");
            }
            break;
            
        case 'editar':
            $sql = "UPDATE usuario SET
                        id_usuario=".$_POST['id_usuario'].",
						nome_usuario='".$_POST['nome_usuario']."',
						cpf_usuario='".$_POST['cpf_usuario']."',
                        data_nasc_usuario='".$_POST["data_nasc_usuario"]."',
						email_usuario='".$_POST['email_usuario']."',
						fone_usuario='".$_POST['telefone_usuario']."'
					WHERE
						id_usuario=".$_POST['id_usuario'];


            $res = $conn->query($sql);
            
            if ($res==true){
                print("<script>alert('Editou com sucesso');</script>");
                print("<script>location.href='?page=usuario-listar';</script>");
            }else{
                print("<script>alert('Não foi possível');</script>");
                print("<script>location.href='?page=usuario-listar';</script>");
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];

            $res = $conn->query($sql);
            
            if ($res==true){
                print("<script>alert('Excluído com sucesso');</script>");
                print("<script>location.href='?page=usuario-listar';</script>");
            }else{
                print("<script>alert('Não foi possível');</script>");
                print("<script>location.href='?page=usuario-listar';</script>");
            }
            break;
        default:
        
            break;
    }
?>