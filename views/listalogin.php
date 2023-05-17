<?php
include('../controller/conn.php');
$tabela = $conn->prepare("SELECT * FROM cadastro;");
$tabela->execute();
$rowTabela = $tabela->fetchAll();
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
    <table>
        <tr>
            <td>Nome</td>
            <td>Senha</td>
        </tr>
        <tbody>
            <?php
            foreach($rowTabela as $linha){
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['senha'] . "</td>";
                echo '<td><a href=../controller/controlleredit.php?mensagem=' . $linha['id'] . ' class="btn btn-warning">Editar</a></td>';
                echo '<td><a href=../controller/controllerdelit.php.php?mensagem=' . $linha['id'] . ' class="btn btn-danger">Excluir</a></td>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>