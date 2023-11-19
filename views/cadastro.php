<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cadastro.css">

<body>
    <div class="conteudo-principal">
        <div class="conteudo-class">
            <form method="post" action="../controller/controllercadastro.php">
                <p>
                <h1>Cadastro</h1>
                </p>
                <p>
                    <label>Digite um Nome de Usúario</label><br>
                    <input type="text">
                </p>
                <p>
                    <label>Digite um E-mail</label><br>
                    <input type="text" required name="email">
                    <br>
                </p>
                <p>
                    <label>Digite uma Senha</label><br>
                    <input type="password" required name="senha">
                    <br>
                </p>
                <p>
                    <button type="submit">cadastrar</button>
                    <br><br>
                    <button type="submit"><a href="../views/logar.php">Logar</a></button>
                </p>

            </form>
        </div>
    </div>

</body>

</html>