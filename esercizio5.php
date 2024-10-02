/esercizio 5
Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array
<?php

$arr=[1,2,3,4,5,6,7,8];
$sum=0;
$sumlenght=0;

for($i = 0; $i < count($arr); $i++){
    if ($arr[$i]%2 ==0) {
    $sum = $sum + $arr[$i];
    $sumlenght = $sumlenght+1;
} else {
    $sum = $sum;
}



}
$result =$sum / $sumlenght;

echo $result;


?>