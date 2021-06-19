<?php
//1. Создайте массив $arr, в котором ключи будут буквы, а значения - числа.
// Затем напишите функцию sum_string(array). В ней нужно вернуть строку из ключей, а так же сумму всех значений, умноженных на 13

$arr = ["a" => 12, "b" => 2, "c" => 4];

function multiplication($n)
{
    return (!empty($n) && is_numeric($n) ? (int)$n * 13 : 0);
}

function sum_string($arr)
{

    if (!empty($arr) && is_array($arr)) {

        $arrKeys = array_keys($arr);
        $strKeys = ! empty($arrKeys) ? implode('', $arrKeys) : '';
        $arrValMultiplication = array_map('multiplication', $arr);
        $strValues = !empty($arrValMultiplication) ? implode('', $arrValMultiplication) : '';

        return $strKeys . ' ' . $strValues;
    }

    return false;
}

echo sum_string($arr);