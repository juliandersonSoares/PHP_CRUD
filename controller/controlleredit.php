<?php
include('conn.php');
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$id=$_POST['id'];

$update_cadastro=$conn->prepare("UPDATE cadastro set nome=:nome, senha = :senha WHERE id = :id");
$update_cadastro->execute(array(':nome'=>$nome, ':senha'=>$senha,':id'=>$id));
echo"<script>
alert('Deletado!');
window.location.href='../views/cadastro.php';
</script>";
?>
