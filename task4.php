<?php
//4. Создать функцию HowManyBetween(), которая будет принимать два значения и будет отдавать разницу между большим и меньшим.
// Учесть, что могут быть не числа, отдавать ошибку с соответствующим текстом. Функция должна сама понимать какое из чисел меньшее.

$number1 = 5;
$number2 = 10;


function HowManyBetween(int $num1, int $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return 'В параметр передано не число!';
    }

    $numbers = [$num1, $num2];

    return max($numbers) - min($numbers);

}

echo HowManyBetween($number1, $number2);

