<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Cadastro da Agenda do Barbeiro</h2>
        <form action="criar_agenda.php" method="post">
            <div class="mb-3 mt-3">
                <label class="form-check-label">
                    Barbeiro
                </label>
                <select class="form-select" name="id_usuario">
                    <option>Selecione um barbeiro</option>
                    <option value="1">João</option>

                </select>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-check-label">
                    Dia da semana
                </label>
                <select class="form-select" name="dia_da_semana">
                    <option>Selecione o dia da semana</option>
                    <option value="0">Domingo</option>
                    <option value="1">Segunda-feira</option>
                    <option value="2">Terça-feira</option>
                    <option value="3">Quarta-feira</option>
                    <option value="4">Quinta-feira</option>
                    <option value="5">Sexta-feira</option>
                    <option value="6">Sábado-feira</option>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_inicio">Horário início:</label>
                <input type="time" class="form-control" name="horario_inicio" placeholder="Enter email"
                    name="horario_inicio">
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_saida_intervelo">Horário saída intervalo:</label>
                <input type="time" class="form-control" name="horario_saida_intervelo" placeholder="Enter email"
                    name="horario_saida_intervelo">
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_volta_intervela">Horário volta intervalo:</label>
                <input type="time" class="form-control" name="horario_volta_intervela" placeholder="Enter email"
                    name="horario_volta_intervela">
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_fim">Horário fim:</label>
                <input type="time" class="form-control" name="horario_fim" placeholder="Enter email" name="horario_fim">
            </div>


            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

</body>

</html>