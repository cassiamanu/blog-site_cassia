<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cpf,cidade,estado,endereco) 
        VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cpf','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acess/css/formulario.css">
    <title>Cadastro</title>
</head>
<body>

    <a href="ini_formulario.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar de Clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="email" id="email"  class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="password" name="senha" id="senha"  class="inputUser" required>
                    <label for="password" class="labelinput">Senha</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="password" name="confsenha" id="confsenha"  class="inputUser" required>
                    <label for="password" class="labelinput">Confirmar Senha</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="tel" name="telefone"  id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br>

                <p>Sexo:</p>

                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>

                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>

                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outros</label>
                <br><br>

                    <label for="data_nascimento"><b>Data de nascimento</b></label>
                    <input type="date" name="data_nascimento"  id="data_nascimento" required>

                <br><br>

                <div class="inputbox">
                    <input type="text" name="cpf"  id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelinput">Cpf</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="cidade"  id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="estado"  id="estado" class="inputUser" required>
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="endereco"  id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div> 
                <br>

                <input type="submit" name="submit" id="submit">             


            </fieldset>
        </form>
    </div>
    
</body>
</html>