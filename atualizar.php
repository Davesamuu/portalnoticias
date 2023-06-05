<?php
include 'db.php';
if (!isset($_GET['id'])) {
    header('Location: listar.php');
    exit;
}
$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM noticias WHERE id = ?');
$stmt->execute([$id]);
$appointment = $stmt->fetch(\PDO::FETCH_ASSOC);

if (!$appointment) {
    header('Location: listar.php');
    exit;
}
$id = $appointment['id'];
$titulo_noticia = $appointment['titulo_noticia'];
$conteudo_noticia = $appointment['conteudo_noticia'];
$foto_noticia = $appointment['foto_noticia'];
$autor_noticia = $appointment['autor_noticia'];
$data_publicacao_noticia = $appointment['data_publicacao_noticia'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atualizar.css">
    <title>Atualizar Noticia</title>
</head>
<body>
    <h1>Atualizar Noticia</h1>
    <form method="post">

        <label for="titulo_noticia">Título da Notícia:</label>
        <input type="text" name="titulo_noticia" value="<?php echo $titulo_noticia; ?>" required><br>

        <label for="conteudo_noticia">Conteúdo da Notícia:</label>
        <input type="text" name="conteudo_noticia" value="<?php echo $conteudo_noticia; ?>" required><br>

        <label for="foto_noticia">Foto da Notícia:</label>
        <input type="text" name="foto_noticia" value="<?php echo $foto_noticia; ?>" required><br>

        <label for="autor_noticia">Autor da Notícia:</label>
        <input type="text" name="autor_noticia" value="<?php echo $autor_noticia; ?>" required><br>

        <label for="data_publicacao_noticia">Data de Publicação da Notícia:</label>
        <input type="text" name="data_publicacao_noticia" value="<?php echo $data_publicacao_noticia; ?>" required><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $appointment['id']; // Obtém o ID do compromisso novamente
    $titulo_noticia = $_POST['titulo_noticia'];
    $conteudo_noticia = $_POST['conteudo_noticia'];
    $foto_noticia = $_POST['foto_noticia'];
    $autor_noticia = $_POST['autor_noticia'];
    $data_publicacao_noticia = $_POST['data_publicacao_noticia'];

    $stmt = $pdo->prepare('UPDATE noticias SET titulo_noticia = ?, conteudo_noticia = ?, foto_noticia = ?, autor_noticia = ?, data_publicacao_noticia = ? WHERE id = ?');
    $stmt->execute([$titulo_noticia, $conteudo_noticia, $foto_noticia, $autor_noticia, $data_publicacao_noticia, $id]);
    header('Location: listar.php');
    exit; 
}
?>
