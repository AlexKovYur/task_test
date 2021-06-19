<?php
//2. Создайте массив $days, где внутри ключей ru и en будут сокращенные названия дней (пн, вт, ... | mn, ts, ...).
// Создайте переменную $lang и присвойте ей id языка (ru или en). Создайте переменную $day, присвойте ей номер дня.
// А теперь выведите названия дня в заданном языке.

//Вариант 1
$days = [
    'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th','fr', 'st','sn']
];

$lang = 'ru';
$day = 3;

echo $days[$lang][$day] ?? '';

echo '<br>';

//Вариант2
function printDay($lang = 'ru', int $day): string
{
    if ($day < 1 || $day > 7) {
        return '';
    }

    $days = [
        'ru' => ['пн', 'вт', 'ср', 'чт', 'пт','сб','вс'],
        'en' => ['mn', 'ts','wd', 'th', 'fr', 'st', 'sn']
    ];

    return $days[$lang][--$day] ?? '';
}

echo printDay($lang, $day);
