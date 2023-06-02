<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo_noticia = $_POST['titulo_noticia'];
    $conteudo_noticia = $_POST['conteudo_noticia'];
    $foto_noticia = $_POST['foto_noticia'];
    $autor_noticia = $_POST['autor_noticia'];
    $data_publicacao_noticia = $_POST['data_publicacao_noticia'];

    $stmt = $pdo->prepare('INSERT INTO noticias (titulo_noticia, conteudo_noticia, foto_noticia, autor_noticia, data_publicacao_noticia)
        VALUES(:titulo_noticia, :conteudo_noticia, :foto_noticia, :autor_noticia, :data_publicacao_noticia)');
    $stmt->execute([
        'titulo_noticia' => $titulo_noticia,
        'conteudo_noticia' => $conteudo_noticia,
        'foto_noticia' => $foto_noticia,
        'autor_noticia' => $autor_noticia,
        'data_publicacao_noticia' => $data_publicacao_noticia
    ]);

    if ($stmt->rowCount()) {
        echo '<span>Notícia cadastrada com sucesso!</span>';
    } else {
        echo '<span>Erro ao cadastrar a notícia. Tente novamente mais tarde.</span>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro Noticia</title>
</head>
<body style = background-color:#ffffff >

    <div id="menu">
    <div style = background-color:#000000> 
        <img class = "imagem2" src="./imgs/logo.png">
    </div>
        
        <ul>
            <li><a class="aumenta" href="index.php">PORTAL DE NOTICIAS</a></li>
            <li><a class="aumenta" href="cadastro.php">CADASTRAR NOTICIAS</a></li>
        </ul>

    <div style = background-color:#000000> 
     <img class = "imagem2" src="./imgs/pinguim.png">
    </div>   </div>
    <div class="container">
   
        <h1>Cadastro Da Notícia</h1>

        <form method="post">
            <label for="titulo_noticia">Título da notícia:</label>
            <input type="text" name="titulo_noticia" value="<?php echo isset($titulo_noticia) ? $titulo_noticia : ''; ?>" required><br>

            <label for="conteudo_noticia">Conteúdo da notícia:</label>
            <input type="text" name="conteudo_noticia" value="<?php echo isset($conteudo_noticia) ? $conteudo_noticia : ''; ?>" required><br>

            <label for="foto_noticia">Foto da notícia:</label>
            <input type="text" name="foto_noticia" value="<?php echo isset($foto_noticia) ? $foto_noticia : ''; ?>" required><br>

            <label for="autor_noticia">Autor da notícia:</label>
            <input type="text" name="autor_noticia" value="<?php echo isset($autor_noticia) ? $autor_noticia : ''; ?>" required><br>

            <label for="data_publicacao_noticia">Data de publicação da notícia:</label>
            <input type="date" name="data_publicacao_noticia" value="<?php echo isset($data_publicacao_noticia) ? $data_publicacao_noticia : ''; ?>" required><br>

            <div>
                <button type="submit" name="submit" value="Agendar">Cadastrar</button>
                <button style="background: none; border: none;"><a href="listar.php">Listar</a></button>
            </div>
        </form>
    </div>
</body>
</html>
