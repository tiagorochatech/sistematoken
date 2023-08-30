<!DOCTYPE html>

<html>

<head>

    <title>Atender Chamados</title>

    <style>

        body {

            font-family: Arial, sans-serif;

            background-color: #f0f7ff;

        }

        h1 {

            color: #3366cc;

        }

        table {

            width: 100%;

            border-collapse: collapse;

            margin-top: 20px;

        }

        th, td {

            padding: 10px;

            border-bottom: 1px solid #ccc;

            text-align: left;

        }

        th {

            background-color: #3366cc;

            color: #ffffff;

        }

        .button {

            background-color: #3366cc;

            color: #ffffff;

            border: none;

            padding: 5px 10px;

            border-radius: 4px;

            cursor: pointer;

        }

    </style>

</head>

<body>

    <h1>Atender Chamados</h1>

    <table>

        <tr>

            <th>Nome</th>

            <th>Tipo</th>

            <th>Prioridade</th>

            <th>Status</th>

            <th>Código</th>

            <th>Ação</th>

        </tr>

        <?php

        $conn = new mysqli('localhost', 'data_base_name', 'senha', 'banco_criado');

        $query = "SELECT * FROM chamados WHERE status='Novo' OR status='Em Andamento'";

        $result = $conn->query($query);



        while ($row = $result->fetch_assoc()) {

            echo "<tr>";

            echo "<td>" . $row['nome'] . "</td>";

            echo "<td>" . $row['tipo'] . "</td>";

            echo "<td>" . ($row['prioridade'] === 'P' ? 'Prioridade' : 'Normal') . "</td>";

            echo "<td>" . $row['status'] . "</td>";

            echo "<td>" . $row['codigo'] . "</td>";

            if ($row['status'] === 'Novo') {

                echo "<td><a class='button' href='atender_finalizar.php?id=" . $row['id'] . "&action=finalizar'>Finalizar</a></td>";

            } else {

                echo "<td>Finalizado</td>";

            }

            echo "</tr>";

        }



        $conn->close();

        ?>

    </table>

</body>

</html>

