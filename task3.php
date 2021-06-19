<?php
//3. Создать функцию checkFunc(), в которую передавать один параметр.
// Если параметр не число - отдавать false, если число - проверить, больше ли оно 170,
// если больше - отдавать "Big", иначе - "Small".

$number = 5;

function checkFunc($num): ?string
{
    if (!is_numeric($num)) {
        return false;
    }

    return ($num > 170) ? 'Big' : 'Small';
}

echo checkFunc($number);