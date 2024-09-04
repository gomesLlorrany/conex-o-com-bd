<?php
//Informações do SGBD para conectar no banco
$server = "localhost";
$user = "root";
$password = "root";
$database = "bd_loja";
//função para realizar a conexão no banco
$conexao = new mysqli($server, $user, $password, $database);
$tabela = "create table tb_produto (
     cd_produto int auto_increment primary key, 
     nm_produto varchar(45),
     vl_produto decimal(6,2),
     ds_produto varchar(100),
     qt_produto int
);";
$conexao->query($tabela);
?>