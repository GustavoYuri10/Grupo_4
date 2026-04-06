<?php 
include("funcoes.php");

$n1 = $_POST["VALOR1"];
$n2 = $_POST["VALOR2"];
$n3 = $_POST["VALOR3"];
$total = ($n1 + $n2 + $n3) / 3;

media($n1, $n2, $n3);  


?>
