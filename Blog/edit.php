<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $telefone = $user_data['telefone'];
        $sexo = $user_data['sexo'];
        $data_nasc = $user_data['data_nasc'];
        $cpf = $user_data['cpf'];
        $cidade = $user_data['cidade'];
        $estado = $user_data['estado'];
        $endereco = $user_data['endereco'];

    }
}
else
{
    header('Location: sistema.php');
}
}
else
{
header('Location: sistema.php');
}
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acess/css/edit.css">
    <title>Cadastro</title>
</head>
<body>

    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveedit.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar de Clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="email" id="email"  class="inputUser"value=<?php echo $email;?> required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="senha" id="senha"  class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="confsenha" id="confsenha"  class="inputUser" required>
                    <label for="senha" class="labelinput">Confirmar Senha</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="tel" name="telefone"  id="telefone" class="inputUser"value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br>

                <p>Sexo:</p>

                <input type="radio" id="feminino" name="genero" value="feminino"<?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>

                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?>required>
                <label for="masculino">Masculino</label>
                <br>

                <input type="radio" id="outro" name="genero" value="outro"<?php echo ($sexo == 'outro') ? 'checked' : '';?>required>
                <label for="outro">Outros</label>
            
                <br><br>

                    <label for="data_nascimento"><b>Data de nascimento</b></label>
                    <input type="date" name="data_nascimento"  id="data_nascimento" value=<?php echo $data_nasc;?> required>

                <br><br>

                <div class="inputbox">
                    <input type="text" name="cpf"  id="cpf" class="inputUser" value=<?php echo $cpf;?> required>
                    <label for="cpf" class="labelinput">Cpf</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="cidade"  id="cidade" class="inputUser" value=<?php echo $cidade;?> required>
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="estado"  id="estado" class="inputUser" value=<?php echo $estado;?> required>
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br>

                <div class="inputbox">
                    <input type="text" name="endereco"  id="endereco" class="inputUser" value=<?php echo $endereco;?> required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div> 
                <br>
                <br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="update">             


            </fieldset>
        </form>
    </div>
    
</body>
</html>