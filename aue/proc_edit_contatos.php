<?php
declare(strict_types=1);

$pdo = require 'connect.php';
$idcontato=$_GET['idcontato'];
$nome= $_GET['nome'];
$sexo=$_GET['sexo'];
$cidade=$_GET['cidade'];

$dados = $pdo->prepare('UPDATE contato SET nome=?,sexo=?,cidade=?,data=? WHERE idcontato=?');
$dados->bindParam(1, $nome);
$dados->bindParam(2, $sexo);
$dados->bindParam(3, $cidade);
$dados->bindParam(4, $data);
$dados->bindParam(5, $idcontato);
$dados->execute();

echo "<form method='POST' action='list.php'> <input class='btn btn-primary' name='SendCadCont' type='submit' value='Consultar e deletar'  style='margin:10px';></form>";