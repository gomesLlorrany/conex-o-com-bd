<?php
//Informações do SGBD para conectar no banco
$server = "localhost";
$user = "root";
$password = "root";
$database = "bd_loja";
//função para realizar a conexão no banco
$conexao = new mysqli($server, $user, $password, $database);
$insert = "INSERT INTO tb_produto VALUES (null, 'prato', '100.00', 'Prato fundo', '5'),
 (null, 'vaso', '50.00', 'Vaso de plantas', 2),
 (null, 'prato', '40.00', 'Prato de vidro', 10),
 (null, 'copo', '30.00', 'Copo de vidro', 5),
 (null, 'facas', '100.00', 'Facas de prata ', 7);";

  $conexao->query($insert);
?>