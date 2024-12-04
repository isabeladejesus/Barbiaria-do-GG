<?php
ob_start();
include "conexao.php";
$criado = false;

$inicio = strtotime($_POST['horario_inicio']);
$final = strtotime($_POST['horario_saida_intervalo']);

$dia_da_semana = $_POST['dia_da_semana'];
$id_usuario = $_POST['id_usuario'];
$mins = ($inicio - $final) / 60;
if($mins < 0)
    $mins = $mins*(-1);

$qnt_de_agendamento = $mins/30;

$acumulado = $inicio;

echo "<h1>Geração de agendamentos do primeiro horário!</h1>";
for($i = 0; $i < $qnt_de_agendamento; $i++){

    echo "<br> Criado agendamento no horario para: " . date('H:i', $acumulado);
    $horario = date('H:i', $acumulado);
    incluirAgenda($dia_da_semana, $id_usuario, $horario, $conn);
    $acumulado = $acumulado + 1800;
}

function incluirAgenda($dia_da_semana, $id_usuario, $horario, $conn){

    $sql_agenda = "INSERT INTO agendas (dia_da_semana , id_usuario, horario)
    VALUES ($dia_da_semana, $id_usuario, '$horario')";

    if ($conn->query($sql_agenda) === TRUE) {
    echo "New record created successfully";
    $criado = true;
    } else {
    echo "Error: " . $sql_agenda . "<br>" . $conn->error;
    }
}


$inicio = strtotime($_POST['horario_volta_intervelo']);
$final = strtotime($_POST['horario_fim']);
$mins = ($inicio - $final) / 60;

if($mins < 0)
    $mins = $mins*(-1);

$qnt_de_agendamento = $mins/30;

$acumulado = $inicio;

echo "<h1>Geração de agendamentos do segundo horário!</h1>";
for($i = 0; $i < $qnt_de_agendamento; $i++){

    echo "<br> Criado agendamento no horario para: " . date('H:i', $acumulado);
    $horario = date('H:i', $acumulado);
    incluirAgenda($dia_da_semana, $id_usuario, $horario, $conn);
    $acumulado = $acumulado + 1800;
}

header('location: agenda.php?status=1');
die();
