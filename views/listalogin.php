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
        <button type="submit"> <a href="../views/cadastro.php">cadastrar</a></button>
        <br>
        <br>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Senha</td>
        </tr>
        <tbody>
            <?php
            foreach($rowTabela as $linha){
                //a tag TR é utilizada para definir uma linha dentro de uma tabela.
                echo '<tr>';
                echo "<th scope='row'>".$linha['id']."</th>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['senha'] . "</td>";
                echo '<td><a href=edit.php?mensagem=' . $linha['id'] . ' class="btn btn-warning">Editar</a></td>';
                echo '<td><a href=../controller/controllerdelit.php?mensagem=' . $linha['id'] . ' class="btn btn-danger">Excluir</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
