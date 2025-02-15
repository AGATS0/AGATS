<?php
$month = readline("Введите номер месяца от 1 до 12:");

if ($month === 2) {
    echo "Количество дней в месяце $month = 28";
} elseif ($month === 4 || $month === 6 || $month === 9 || $month === 11) {
    echo "Количество дней в месяце $month = 30";
} else {
    echo "Количество дней в месяце $month = 31";
}
    

