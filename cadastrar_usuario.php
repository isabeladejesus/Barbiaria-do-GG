<?php
include "conexao.php";

echo "<pre>";

print_r($_POST);


$nome = $_POST['nome_usuarios'];
$email = $_POST['email'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$id_grupo = $_POST['id_grupo'];

$nome_do_banco = $_POST['nome_do_banco'];
$numero_agencia = $_POST['numero_Agencia'];
$numero_conta = $_POST['numero_Conta'];
$chave_pix = $_POST['chave_PIX'];

echo "<br>nome_do_banco $nome_do_banco";
echo "<br>chave_pix $chave_pix";
echo "<br>numero_conta $numero_conta";
echo "<br>numero_agencia $numero_agencia";




$sql_usuario = "INSERT INTO usuarios (nome_usuario , email, data_de_nascimento, id_grupo)
VALUES ('$nome', '$email', '$data_de_nascimento', $id_grupo)";



if ($conn->query($sql_usuario) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_usuario . "<br>" . $conn->error;
}


$sql = "SELECT * FROM usuarios order by id_usuarios desc limit 1";
$result = $conn->query($sql);
$id_usuarios = $result->fetch_assoc()['id_usuarios'];


$sql_dados_bancarios = "INSERT INTO dados_bancarios (nome_do_banco , numero_agencia , numero_conta , chave_pix, id_usuarios )
VALUES ('$nome_do_banco', '$numero_agencia', '$numero_conta', '$chave_pix', $id_usuarios)";


if ($conn->query($sql_dados_bancarios) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_dados_bancarios . "<br>" . $conn->error;
}

$conn->close();



?>