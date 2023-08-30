<!DOCTYPE html>

<html>

<head>

    <title>Atender/Finalizar Chamados</title>

    <style>

        body {

            font-family: Arial, sans-serif;

            background-color: #f0f7ff;

            display: flex;

            justify-content: center;

            align-items: center;

            height: 100vh;

            margin: 0;

        }

        .container {

            background-color: #ffffff;

            border-radius: 8px;

            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

            padding: 20px;

            text-align: center;

        }

        .success-box {

            background-color: #8bc34a;

            color: #ffffff;

            border-radius: 8px;

            padding: 20px;

            text-align: center;

            margin-bottom: 20px;

        }

        h1 {

            color: #3366cc;

        }

        .button {

            background-color: #3366cc;

            color: #ffffff;

            border: none;

            padding: 10px 20px;

            border-radius: 4px;

            cursor: pointer;

        }

    </style>

</head>

<body>

    <div class="container">

        <?php

        if (isset($_GET['id']) && isset($_GET['action'])) {

            $chamado_id = $_GET['id'];

            $action = $_GET['action'];

            

            // Conexão com o banco de dados

            $conn = new mysqli('localhost', 'data_base_name', 'senha', 'banco_criado');



            if ($action === 'atender') {

                // Atualiza o status para "Em Andamento"

                $query = "UPDATE chamados SET status='Em Andamento' WHERE id='$chamado_id'";

                $conn->query($query);

                echo "<div class='success-box'><h1>FINALIZADO COM SUCESSO</h1></div>";

            } elseif ($action === 'finalizar') {

                // Remove o chamado da tabela

                $query = "DELETE FROM chamados WHERE id='$chamado_id'";

                $conn->query($query);

                echo "<div class='success-box'><h1>FINALIZADO COM SUCESSO</h1></div>";

            }



            $conn->close();

        } else {

            echo "<p>Ação inválida ou chamado não especificado.</p>";

        }

        ?>

        <p><a class='button' href='atender_chamado.php'>Voltar para Atender Chamados</a></p>

    </div>

</body>

</html>

