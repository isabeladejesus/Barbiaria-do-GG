<?php
include "connection.php";

echo "<pre>";

print_r($_POST);


$nome = $_POST['nome'];
$email = $_POST['email'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$id_grupo = $_POST['id_grupo'];


$nome_do_banco = $_POST['nome_do_banco'];
$numero_agencia = $_POST['numero_agencia'];
$numero_conta = $_POST['numero_conta'];
$chave_pix = $_POST['chave_pix'];

echo "<br>nome_do_banco $nome_do_banco";
echo "<br>chave_pix $chave_pix";
echo "<br>numero_conta $numero_conta";
echo "<br>numero_agencia $numero_agencia";

// exit('<br>não inseriri');


$sql_usuario = "INSERT INTO usuarios (nome , email, data_de_nascimento, id_grupo)
VALUES ('$nome', '$email', '$data_de_nascimento', $id_grupo)";



$sql_dados_bancarios = "INSERT INTO dados_bancarios (nome_do_banco , numero_agencia , numero_conta , chave_pix )
VALUES ('$nome_do_banco', '$numero_agencia', '$numero_conta', $chave_pix)";


if ($conn->query($sql_usuario) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_usuario . "<br>" . $conn->error;
}

if ($conn->query($sql_dados_bancarios) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_dados_bancarios . "<br>" . $conn->error;
}

$conn->close();



?>
