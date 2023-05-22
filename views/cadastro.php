<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../controller/controllercadastro.php">
        <input type="text" placeholder="Digite um nome" required name="nome">
        <br>
        <br>
        <input type="password" placeholder="Digite uma senha" required name="senha">
        <br>
        <br>
        <button type="submit">cadastrar</button>
        <button type="submit"><a href="../views/listalogin.php">listar</a></button>
    </form>
</body>
</html>
