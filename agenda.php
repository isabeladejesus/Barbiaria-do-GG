<?php
function obtemHorariosParaSelect($horarioInicio, $horarioFinal)
{
    $time = DateTime::createFromFormat('H:i:s', $horarioInicio);
    $horarios[] = $horarioInicio;
    while ($horarioInicio <= $time->format('H:i:s') && $horarioFinal > $time->format('H:i:s')) {
        $time->modify("+$timer minutes");
        $horarios[] = $time->format('H:i:s');
    }

    return $horarios;
}

$horarios = array_merge(
    obtemHorariosParaSelect('08:00:00', '12:00:00', 30)
    obtemHorariosParaSelect('13:30:00', '18:00:00', 30)
);


?>
