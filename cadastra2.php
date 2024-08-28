<?php 

include "conexao.php"; 
echo "<pre>"; 
print_r([
    'POST' => $_POST
]);
$nome_usuario = $_POST ['nome_de_usuario'];
$email = $_POST ['email'];
$data_de_nascimento = $_POST ['data_de_nascimento'];
$nome_do_banco = $_POST ['nome_do_banco'];
$numero_Agencia = $_POST ['numeroAgencia'];
$numero_Conta = $_POST ['numeroConta'];

?>