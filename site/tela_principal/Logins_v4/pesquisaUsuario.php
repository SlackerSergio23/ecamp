<?php
include_once "conexao.php";

//recebendo os dados que foram digitados no formulario

$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha=filter_input(INPUT_POST,'senha');

$comandoSql = "select * from tb_usuario where email_usuario='$email' and senha_usuario='$senha'";

$resultado = $pdo->query($comandoSql);
if($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
    $id=$linha["id_usuario"];
    echo "$id";
}
?>