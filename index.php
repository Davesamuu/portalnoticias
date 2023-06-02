<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SITE DO DAVE</title>
</head>
<body style = background-color:#ffffff >

    <div id="menu">
    <div style = background-color:#000000> 
        <img class = "imagem" src="./imgs/logo.png">
    </div>
        
        <ul>
            <li><a class="aumenta" href="index.php">PORTAL DE NOTICIAS</a></li>
            <li><a class="aumenta" href="cadastro.php">CADASTRAR NOTICIAS</a></li>
        </ul>

    <div style = background-color:#000000> 
     <img class = "imagem" src="./imgs/pinguim.png">
    </div>
</div>

<?php
$stmt = $pdo->query("SELECT * FROM noticias");
$noticias = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($noticias) == 0) {
    echo '<p>Nenhuma noticia cadastrada </p>';
} else {

    foreach ($noticias as $noticia) {
        echo "<div class='projcard projcard-blue'>	<div class='projcard-innerbox'> <img class='projcard-img' src='"; 
        echo $noticia['foto_noticia'] . "'/>";
        echo "<div class='projcard-textbox'> <div class='projcard-title'>";
        echo  $noticia['titulo_noticia'];
        echo "</div> <div class='autoredata'> <div class='projcard-subtitle'>";
        echo 'Autor: ' . $noticia['autor_noticia'] . "</div> <div class='projcard-subtitle'>";
        echo 'Data de Publicação:' . $noticia['data_publicacao_noticia'] . "</div> </div> <div class='projcard-bar'></div>
        <div class='projcard-description'>";
        echo  $noticia['conteudo_noticia'];
        echo  "</div> </div> </div> </div>";
    }
    
}
?>




</section>


<footer class="container-dois" >
    <br>
	<div class="item" style="padding-top: 5px;">Criado por: Davi 2023</div>
</footer>