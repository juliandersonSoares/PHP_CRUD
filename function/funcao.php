<?php 

function crialogin(){
include('conn.php');  
$nome=$_POST['nome'];
$senha=$_POST['senha'];

$cadastro=$conn->prepare('INSERT INTO cadastro(nome,senha) VALUES (:nome,:senha)');
$cadastro->execute(array(':nome'=>$nome,':senha'=>$senha));

return crialogin();

}

function delete(){
    include('conn.php');
    $id=$_POST['id'];
    $delUser=$conn->prepare('DELETE FROM cadastro WHERE id=:id');
    $delUser->execute(array(':id'=>$id));
}
function select(){
include('conn.php');
$consulta = $pdo->query("SELECT nome, usuario FROM cadastro;");

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']}<br />";
}
}
?>