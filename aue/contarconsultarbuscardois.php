<?php
include_once 'connect.php';
$sexo=$_GET['sexo'];
$cidade=$_GET['cidade'];
echo '<h1>Quantidade</h1>';
$total = 0;
$n = 1;
$sql = "SELECT * FROM contato where sexo='$sexo' AND cidade='$cidade'";
$sql = $pdo->query($sql);
$total = $sql->rowCount();


echo 'Total de pessoas do sexo e cidade informada: <b>'.$total.'</b>';

echo "<br><br><br>";
