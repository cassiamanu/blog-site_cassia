<?php
    require 'conn.php';

    try {
        $sql = $pdo->query("SELECT * FROM notices");
        if ($sql->rowCount() > 0) {
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $lista = [];
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        $lista = [];
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="acess/css/global.css">
    <link rel="stylesheet" href="acess/css/blog.css">
    <title>Blog | Digital Web</title>
</head>
<body>
    <div class="container">
        <header id="header">
            <div class="menu">
                <h2><a href="blog.html">Blog</a></h2>
                <h2><a href="index.html">Publicações</a></h2>
                <h2><a href="contato">Contato</a></h2>
                <h2><a href="loja.html">Loja</a></h2>
                <h2><a href="sobre.html">Sobre</a></h2>
                <h2><a href="cadastroblog.php">Cadastrar notícias</a></h2> 
            </div>
                <br><br><br><br><br>

            <div class="input-search">
                <i class="bi bi-search"></i>
                <input type="text" name="text" id="text" placeholder="Pesquisar no blog">
            </div>
        </header>

        <main class="container-post">

              <?php foreach ($lista as $notice): ?> 
            <div class="post">
                <div class="top-post menu">
                    <span>22/07/2024</span>
                    <i class="bi bi-heart"></i>
                </div>
                
                <div class="content-post">
                    <h3>Título da Notícia</h3>
                    <p>Descrição</p>
                </div>
            </div>
            <?php endforeach;?> 
        </main>
    <?php require 'footer.php';?>
    </div>

</body>
</html>