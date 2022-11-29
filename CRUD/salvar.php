<?php
switch($_REQUEST["action"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Cadastrado com sucesso');</script>";
        } else {
            print "<script>alert('Falha em cadastrar!');</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];
        
        $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}'
        WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";
        } else {
            print "<script>alert('Falha em editar!');</script>";
        }
        break;

    case 'excluir':

        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Excluido com sucesso');</script>";
        } else {
            print "<script>alert('Falha em excluir!');</script>";
        }
        break;
}
?>
