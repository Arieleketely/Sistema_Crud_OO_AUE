<?php

declare(strict_types=1);
echo $idcontato;
$pdo = require 'connect.php';
$idcontato= $_GET['idcontato'];

$sql = "DELETE FROM contato WHERE idcontato = :idcontato";
$stmt = $pdo->prepare( $sql );
$stmt->bindParam( ':idcontato', $idcontato );
 
$result = $stmt->execute();
 
if ( ! $result )
{
    var_dump( $stmt->errorInfo() );
    exit;
}
 
echo $stmt->rowCount() . "linhas removidas";