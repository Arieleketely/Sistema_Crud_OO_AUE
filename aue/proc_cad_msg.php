<?php
declare(strict_types=1);

$pdo = require 'connect.php';

$nome= $_GET['nome'];
$sexo=$_GET['sexo'];
$cidade=$_GET['cidade'];

$dados = $pdo->prepare('INSERT INTO contato (nome, sexo,cidade) VALUES (?, ?,?)');
$dados->bindParam(1, $nome);
$dados->bindParam(2, $sexo);
$dados->bindParam(3, $cidade);
$dados->execute();

echo "Cadastrou!";
        
echo "<form method='POST' action='list.php'> <input class='btn btn-primary' name='SendCadCont' type='submit' value='Consultar e deletar'  style='margin:10px';></form>";
