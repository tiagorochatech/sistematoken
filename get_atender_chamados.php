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

    echo "<td>";
    if ($row['status'] === 'Novo') {
        echo "<form action='atualizar_status.php' method='POST'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<select name='novo_status'>";
        echo "<option value='Em Andamento'>Em Andamento</option>";
        echo "<option value='Finalizado'>Finalizado</option>";
        echo "</select>";
        echo "<button type='submit' class='status-button'>Atualizar</button>";
        echo "</form>";
    } else {
        echo "Finalizado";
    }
    echo "</td>";

    echo "</tr>";
}

$conn->close();
?>
