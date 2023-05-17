<?php
include('conn.php');

$deli=$conn->prepare('DELETE FROM cadastro  WHERE id = :id');
$deli->bindParam(':id', $id);
$deli->execute();
?>