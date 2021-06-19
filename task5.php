<?php
//5. Создать функцию с одним параметром - вес в тоннах. Параметр всегда число.
// Внутри функции определять сколько элементов можно создать из этого числа, если на один элемент необходимо 7 тонн.
// Результат вывести в виде "Создано x штук", если есть остаток - добавить к выводу ", остаток - y грамм".

$weight = 37;

function weightTons(int $weight): ?string
{
    $remainder = $weight % 7;

    $amount = ($weight - $remainder) / 7;

    $result = $remainder ? 'Создано %d штук, остаток - %d грамм.' : 'Создано %d штук.';

    return sprintf($result, $amount, $remainder);
}

echo weightTons($weight);