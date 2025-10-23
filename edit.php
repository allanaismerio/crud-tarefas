<?php include('db.php'); ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tarefas WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $update = "UPDATE tarefas SET titulo='$titulo', descricao='$descricao' WHERE id=$id";
    if ($conn->query($update) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarefa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>✏️ Editar Tarefa</h1>
        <form method="POST">
            <label>Título:</label>
            <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>">

            <label>Descrição:</label>
            <textarea name="descricao"><?php echo $row['descricao']; ?></textarea>

            <input type="submit" name="update" value="Atualizar">
        </form>

        <a href="index.php" class="back">⬅️ Voltar</a>
    </div>
</body>
</html>
