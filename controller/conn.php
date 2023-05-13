<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=banco;port=3307;','root','');
} catch(PDOException $e) {
    echo 'Error' . $e->getMessage();
}

?>