<?php
$consulta=$conn->query("SELECT nome,senha FROM cadastro;");
while($linha =$consulta->fetch(PDO::FETCH_ASSOC)){
    echo "nome:{$linha['nome']} - senha:{$linha['senha']}";
}
?>
