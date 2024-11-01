<?php
include "conexao.php";
echo "<pre>";
print_r($_POST);

// Geração de agendamentos do primeiro horário
$inicio = strtotime($_POST['horario_inicio']);
$final = strtotime($_POST['horario_saida_intervalo']);
$mins = ($inicio - $final) / 60;

if ($mins < 0) {
    $mins = $mins * (-1);
}

$qnt_de_agendamento = $mins / 30;
$acumulado = $inicio;

echo "<h1>Geração de agendamentos do primeiro horário!</h1>";
for ($i = 0; $i < $qnt_de_agendamento; $i++) {
    echo "\n Criado agendamento no horário para: " . date('H:i', $acumulado);
    
    // Verifica se dia_da_semana está definido
    if (isset($_POST['dia_da_semana'])) {
        incluirAgenda(
            $_POST['dia_da_semana'],
            date('H:i', $acumulado),
            $_POST['horario_saida_intervalo'],
            $_POST['horario_volta_intervalo'],
            $_POST['horario_fim'],
            $conn
        );
    } else {
        echo "Erro: dia_da_semana não foi definido.";
    }
    
    $acumulado += 1800; // Adiciona 30 minutos
}

// Geração de agendamentos do segundo horário
$inicio = strtotime($_POST['horario_volta_intervalo']);
$final = strtotime($_POST['horario_fim']);
$mins = ($inicio - $final) / 60;

if ($mins < 0) {
    $mins = $mins * (-1);
}

$qnt_de_agendamento = $mins / 30;
$acumulado = $inicio;

echo "<h1>Geração de agendamentos do segundo horário!</h1>";
for ($i = 0; $i < $qnt_de_agendamento; $i++) {
    echo "\n Criado agendamento no horário para: " . date('H:i', $acumulado);
    $acumulado += 1800; // Adiciona 30 minutos
}

// Função para incluir agendamento
function incluirAgenda(
    $dia_da_semana,
    $horario_inicio,
    $horario_saida_intervalo,
    $horario_volta_intervalo,
    $horario_fim,
    $conn
) {
    $sql_agenda = "INSERT INTO agenda (dia_da_semana, horario_inicio, horario_saida_intervalo, horario_volta_intervalo, horario_fim) 
    VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql_agenda);
    $stmt->bind_param("sssss", $dia_da_semana, $horario_inicio, $horario_saida_intervalo, $horario_volta_intervalo, $horario_fim);

    if ($stmt->execute()) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
}
?>
