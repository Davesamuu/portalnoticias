<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>
<h1>Cadastro</h1>
<?php
$stmt = $pdo->query("SELECT * FROM noticias");
$cadastros = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($cadastros) == 0) {
    echo '<p>Nenhuma noticia cadastrada </p>';
} else {
    echo '<table border="1">';
    echo '<thead>
            <tr>
                <th>id</th>
                <th>titulo_noticia</th>
                <th>conteudo_noticia</th>
                <th>foto_noticia</th>
                <th>autor_noticia</th>
                <th>data_publicacao_noticia</th>
                <th colspan="2">Opções</th>
                </tr></thead>';
    echo '<tbody>';

    foreach ($cadastros as $cadastro) {
        echo '<tr>';
        echo '<td>' . $cadastro['id'] . '</td>';
        echo '<td>' . $cadastro['titulo_noticia'] . '</td>';
        echo '<td>' . $cadastro['conteudo_noticia'] . '</td>';
        echo '<td>' . $cadastro['autor_noticia'] . '</td>';
        echo '<td>' . $cadastro['foto_noticia'] . '</td>';
        echo '<td>' . date('d/m/Y', strtotime($cadastro['data_publicacao_noticia'])) . '</td>';
        echo '<td><a style="color:black;" href="atualizar.php?id=' . $cadastro['id'] . '">Atualizar</a></td>';
        echo '<td><a style="color:black;" href="deletar.php?id=' . $cadastro['id'] . '">Deletar</a></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
?>

<button onclick="window.location.href='cadastro.php'">Voltar para o Início</button>

</body>
</html>
