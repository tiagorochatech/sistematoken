<?php
$conn = new mysqli('sql201.infinityfree.com', 'if0_34821246', 'YMpCsNw3yL9Z8bP', 'if0_34821246_sistema');
$query = "SELECT * FROM chamados";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['tipo'] . "</td>";
    echo "<td>" . ($row['prioridade'] === 'P' ? 'Prioridade' : 'Normal') . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>" . $row['codigo'] . "</td>";
    echo "</tr>";
}

$conn->close();
?>
