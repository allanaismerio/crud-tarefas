<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Tarefa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>➕ Adicionar Tarefa</h1>
        <form action="" method="POST">
            <label>Título:</label>
            <input type="text" name="titulo" required>

            <label>Descrição:</label>
            <textarea name="descricao"></textarea>

            <input type="submit" name="submit" value="Salvar">
        </form>

        <a href="index.php" class="back">⬅️ Voltar</a>

        <?php
        if (isset($_POST['submit'])) {
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];

            $sql = "INSERT INTO tarefas (titulo, descricao) VALUES ('$titulo', '$descricao')";
            if ($conn->query($sql) === TRUE) {
                header("Location: index.php");
            } else {
                echo "Erro: " . $conn->error;
            }
        }
        ?>
    </div>
</body>
</html>
