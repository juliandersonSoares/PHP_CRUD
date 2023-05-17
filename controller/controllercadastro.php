<?php
include('conn.php');
$nome=$_POST['nome'];
$senha=$_POST['senha'];

$cadastro=$conn->prepare('INSERT INTO cadastro(nome,senha) VALUES(:nome,:senha)');
$cadastro->execute(array(':nome'=>$nome, ':senha'=>$senha));

if ($cadastro==true){
    echo 'cadastradado com sucesso';

echo '<script>
alert("Cadastro feito!");
window.location.href="../views/cadastro.php";
</script>';
}
?>
