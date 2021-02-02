<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'select * from contato';

echo '<h3>Pessoas: </h3>';
echo '<head><link rel="stylesheet" type="text/css" href="boostrap/bootstrap.min.css" media="screen" /></head>';
echo '<a href="http:../aue/buscar.php" class="btn btn-danger">Fitro para excluir</a>';
echo "<br><br>";

echo '<a href="http:../aue/contarbuscar.php" class="btn btn-primary">Fitro para ver quantas mulheres e homens estão cadastrados</a>';
echo "<br><br>";

echo '<a href="http:../aue/contarbuscardois.php" class="btn btn-primary">Fitro contar por cidade e sexo </a>';
echo "<br><br>";

foreach ($pdo->query($sql) as $key => $value) {
  
    echo '<table class="table table-striped" border="1">';
  
    echo  '<tr><td scope="col">Id</td><td scope="col">Sexo</td><td scope="col">Nome</td><td scope="col">Data</td><td scope="col">Cidade</td></tr>';
   echo  '<td scope="col">' . $value['idcontato'] .'</td>';
   
    echo '<td scope="col">'. $value['sexo']  .'</td>';
   echo '<td scope="col">'. $value['nome'] . '</td>';
   echo '<td scope="col">'. $value['data'] . '</td>';
   echo '<td scope="col">'. $value['cidade'] . '</td>';
   echo "<td><a href='editar.php?idcontato=".$row_msg_cont['idcontato']."'>Editar</a><br></td><hr>";
   
  }
  
 