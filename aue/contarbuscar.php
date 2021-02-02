<?php
include_once 'connect.php';

echo '<h1>Quantidade</h1>';
$total = 0;
$n = 1;
$sql = "SELECT * FROM contato where sexo='Feminino'";
$sql = $pdo->query($sql);
$total = $sql->rowCount();


echo 'Total de pessoas Femininas: <b>'.$total.'</b>';

echo "<br><br><br>";

$totald = 0;
$nd = 1;
$sqld = "SELECT * FROM contato where sexo='Masculino'";
$sqld = $pdo->query($sqld);
$totald = $sqld->rowCount();


echo 'Total de pessoas Marculinas: <b>'.$totald.'</b>';

echo "<br><br><br>";

$totalt = 0;
$nt = 1;
$sqlt = "SELECT * FROM contato where cidade='Juiz de Fora' AND sexo='Masculino'";
$sqlt = $pdo->query($sqlt);
$totalt = $sqld->rowCount();


echo 'Total de pessoas de Juiz de Fora que são homens: <b>'.$totalt.'</b>';

echo "<br><br><br>";

$totalq = 0;
$nq = 1;
$sqlq = "SELECT * FROM contato where cidade='Juiz de Fora' AND sexo='Feminino'";
$sqlq = $pdo->query($sqlq);
$totalq = $sqlq->rowCount();


echo 'Total de pessoas de Juiz de Fora que são mulheres: <b>'.$totalq.'</b>';
