<?php

$conn = new mysqli('localhost', 'data_base_name', 'senha', 'banco_criado');
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

