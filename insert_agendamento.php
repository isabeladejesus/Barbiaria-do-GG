<?php

include "conexao.php";

echo "<pre>";


$parts = parse_url($_SERVER['REQUEST_URI']);
parse_str($parts['query'], $query);

$id_agenda = $query['id_agenda'];
$data = $query['data'];
$id_usuario = $query['id_usuario'];
$servico = $query['id_servico'];
$sql_agendamento = "
    INSERT INTO agendamentos 
    (id_usuario, id_agenda, data, id_servico)
    VALUES
    ($id_usuario, $id_agenda, '$data', $servico)
";


if($conn->query($sql_agendamento))
    header('location: agendar.php?status=1');


?>



