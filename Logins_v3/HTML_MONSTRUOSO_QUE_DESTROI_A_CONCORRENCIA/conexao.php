<?php

//definindo local, usuario, senha e banco de dados que será utilizado padrao antigo
//$conn=mysqli_connect("localhost","root","","nome_banco");


//definindo local, banco, usuario e senha usando PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=bd_projeto', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Conexao ok";
    
} catch(PDOException $e) {
    echo "Erro na conexao: " . $e->getMessage();
   }

?>