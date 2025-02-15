<?php
$res = 1;
$i = 1;
$n = readline("введите факториал какого числа нужен:");

while ($i<=$n){
    $res = $i * $res;
    $i++;
}
echo "факториал $n = $res";