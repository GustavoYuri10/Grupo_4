<?php
function exibir($nome, $telefone) {
echo "boa noite " .$nome. "<br>";
echo "seu telefone é: " .$telefone. "<br>";
}
function somar($n1, $n2) {
$total = $n1 + $n2;
echo "Valor da soma: ".$total;
}

function dobrar($n1) {
   $total = $n1 * 2;
echo "Dobro do numero: ".$total;      
}   
function convertergraus($C) {
$C = $_POST["VALOR1"];
$total = $C * 9/5 + 32;

echo "Temperatura Fahrennheit:".$total;
}

function converterdolar($n1) {
    $total = $n1 * 5.21;

echo "Em dolar: ".$total."$";
}

function media($n1, $n2, $n3) {
$total = ($n1 + $n2 + $n3) / 3;

echo "Nota: ".$total;

if($total>=7) {
    echo "<br>", " Aprovado", "<br>";


     } Else{
        echo "<br>", " Reprovado", "<br>";    }
    
}

?>