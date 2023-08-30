<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Chamados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #001f3f;
            color: #ffffff;
            margin: 0;
            padding: 0;
            position: relative;
        }
        .logo {
            position: absolute;
            top: -50px;
            left: 30px;
            max-width: 220px;
            height: auto;
        }
        h1 {
            color: #39CCCC;
            text-align: center;
            padding: 20px;
            font-size: 90px;
            margin-left: 300px;
            margin-right: 40px;
        }
        .date {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 40px;
            border: 3px solid #39CCCC;
            table-layout: fixed;
        }
        th, td {
            padding: 20px;
            border-bottom: 1.5px solid #39CCCC;
            text-align: center;
            font-size: 26px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        th {
            background-color: #001f3f;
            color: #39CCCC;
            font-size: 27px;
            position: sticky;
            top: 0;
            z-index: 1; /* Adicionado para corrigir a sobreposição */
        }
        tr:nth-child(even) {
            background-color: #004080;
        }
        .clock {
            position: absolute;
            top: 80px;
            right: 26px;
            font-size: 90px;
        }
        /* Estilos para o letreiro no rodapé */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #001f3f;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            font-size: 42px;
            animation: marquee 30s linear infinite;
        }
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>
   <script>
        function updateTable() {
            const tbody = document.getElementById('chamadosBody'); // tbody para atualização
            const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    tbody.innerHTML = xhr.responseText;
                }
            };

            xhr.open('GET', 'get_chamados.php', true);
            xhr.send();
        }

        function reloadTable() {
            updateTable();
        }

        // Chama a função reloadTable() a cada 10 segundos (10000 milissegundos)
        setInterval(reloadTable, 10000);

        // Atualiza o relógio a cada segundo
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const timeString = `${hours}:${minutes}:${seconds}`;
            document.getElementById('clock').textContent = timeString;
        }

        setInterval(updateClock, 1000);
    </script>
</head>
</head>
<body>
    <img class="logo" src="logo_branco.png" alt="Logo Branco">
    <div class="date" id="date"></div>
    <div class="clock" id="clock"></div>
    <h1>Chamados</h1>
    <table>
        <thead>
            <tr>
                <th>NOME</th>
                <th>TIPO</th>
                <th>PRIORIDADE</th>
                <th>STATUS</th>
                <th>CODIGO</th>
            </tr>
        </thead>
        <tbody id="chamadosBody"> <!-- tbody para atualização -->
            <?php include 'get_chamados.php'; ?>
        </tbody>
    </table>
    <div class="footer">AGRADECEMOS A PREFERENCIA - SIMTECH - SUPORTE EM INFORMATICA</div>
</body>
</html>
