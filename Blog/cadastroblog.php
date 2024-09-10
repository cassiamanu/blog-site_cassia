<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acess/css/global.css">
    <link rel="stylesheet" href="acess/css/cadastrar.css">
    <title>Cadastro de Notícia | Digital Web</title>
</head>
<body>

    <header id="header">
        <div class="menu">
            <h2>Blog</h2>
            <h2><a href="blog.php">Início</a></h2>
        </div>
        <h1>Cadastre uma nova notícia</h1>
    </header>

    <main id="main">
        <form class="form" method="POST" action="cadastrar_action.php">
            <div class="input-search">
                <label for="inputNotice">Título da Notícia</label>
                <input type="text" name="notice" id="inputNotice" required>
            </div>

            <div class="input-search">
                <label for="inputDescription">Descrição da Notícia</label>
                <textarea type="text" name="description" rows="5" id="inputDescription" required></textarea>

                <div class="inputsearch">
                    <input type="submit" value="Cadastrar">
                </div>
            </div>
        </form>
    </main>

    <?php require 'footer.php';?>

</body>
</html>