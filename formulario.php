<?php

if(isset($_POST['submit']))
{
/*{
    print_r($_POST['nome']);
}**/


include_once('config.php');

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];
 $genero = $_POST['genero'];

$result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,email,telefone,genero) 
VALUES ('$nome', '$email', '$telefone', '$genero')");
}

?>


<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/formulario.css" rel="stylesheet">
    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method ="POST">
            <fieldset>
                <legend><b>Fórmulário Usuários</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
