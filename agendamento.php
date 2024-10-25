<?php

$inicio = strtotime($_POST['']);
$final = strtotime($_POST['']);
$mins = ($inicio - $final) / 60;
echo $mins;

$qnt_de_agendamento = $mins/30;

echo "<br> qnt: $qnt_de_agendamento";
$acumulado = $inicio;

for($i = 0; $i < $qnt_de_agendamento; $i++){

    echo "\n Criado agendamento no horario" . date('H:i', $acumulado);
    $acumulado = $acumulado + 1800;
}
