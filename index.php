<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>📋 Lista de Tarefas</h1>
        <a href="add.php" class="btn">➕ Nova Tarefa</a>

        <table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>

            <?php
            $sql = "SELECT * FROM tarefas ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['titulo']}</td>
                            <td>{$row['descricao']}</td>
                            <td>{$row['data_criacao']}</td>
                            <td>
                                <a href='edit.php?id={$row['id']}'>✏️ Editar</a>
                                <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Deseja excluir?\")'>🗑️ Excluir</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhuma tarefa encontrada</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
