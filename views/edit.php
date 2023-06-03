<?php
include('../controller/conn.php');
//comando isset verifica se a variavel possui algum valor 
if (isset($_GET['mensagem'])){
    $id = $_GET['mensagem'];
}
else{
    header("Location: .php");
}
$busca=$conn->prepare("SELECT * FROM cadastro WHERE id=:id");
$busca->execute(array('id'=>$id));
$rowTable = $busca->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/controllerupdate.php" method="post">
        <input type="text" name="id" value="<?php echo $rowTable[0]['id'];?>">
        <input type="text" name="nome" value="<?php echo $rowTable[0]['nome']; ?>">
        <input type="password" name="senha" value="<?php echo $rowTable[0]['senha'];  ?>" />
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>
