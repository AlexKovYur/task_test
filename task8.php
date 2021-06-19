<?php
//8. Создайте функцию checkValue(), которая принимает два значение - ассоциативный массив и строку.
// В ней проверять есть ли значение в массиве, если есть - прервать foreach и вернуть ключ,
// в котором записано это значение. Не использовать in_array(), только foreach(), только hardcode.

$string = 'Переменая';
$array = ['Строка', 'Текст', 'Переменая'];
//$array = ['a' => 'Строка', 'b' => 'Текст', 'c' => 'Переменая'];

function checkValue(string $str, array $arr)
{
    foreach ($arr as $key => $val) {
        if ($str === $val) {
            return $key;
        }
    }

    return false;
}

echo checkValue($string, $array);