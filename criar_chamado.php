<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Criar Chamado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f7ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 300px;
            width: 110%;
            margin: auto;
            padding: 30px;
            background-color: #d6e7ff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease-out;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 240px;
            height: auto;
        }
        h1 {
            color: #3366cc;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        form label {
            font-size: 18px;
            display: block;
            margin-bottom: 6px;
            color: #3366cc;
        }
        input[type="text"], select {
            width: 85%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #b3c9ff;
            border-radius: 10px;
            font-size: 14px;
            background-color: #f4faff;
            transition: border-color 0.3s, background-color 0.3s;
        }
        input[type="text"]:focus, select:focus {
            outline: none;
            border-color: #3366cc;
            background-color: #ffffff;
        }
        .radio-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        input[type="radio"] {
            margin-right: 8px;
            transform: translateY(2px);
        }
        input[type="radio"] + label {
            font-size: 16px;
            vertical-align: middle;
        }
        input[type="submit"] {
            background-color: #3366cc;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
            animation: fadeInUp 1s ease-out;
            display: block;
            margin: 0 auto; /* Centraliza horizontalmente */
        }
        input[type="submit"]:hover {
            background-color: #295a9a;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Estilos para tornar a página responsiva */
        @media (max-width: 500px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo_azul.png" alt="Logo Azul">
        </div>
        <h1>Criar Chamado</h1>
        <form action="criar_chamado1.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo">
                <option value="CAIXA">CAIXA</option>
                <option value="CREDITO">CREDITO</option>
                <option value="OUTROS">OUTROS</option>
            </select>
            <label>Prioridade:</label>
            <div class="radio-group">
                <input type="radio" name="prioridade" value="N" id="normal" checked>
                <label for="normal">Normal</label>
            </div>
            <div class="radio-group">
                <input type="radio" name="prioridade" value="P" id="prioridade">
                <label for="prioridade">Prioridade</label>
            </div>
            <input type="submit" value="Criar Chamado">
        </form>
    </div>
</body>
</html>
