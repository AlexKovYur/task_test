<?php
//10. Создать переменную $num. Создать функцию minusNumber, которая будет принимать эту переменную и менять её внутри функции.
// В себе она вычитает из него 1, если число больше 3 - вызывает себя. Использовать рекурсию.
// Вызов функции должен быть minusNumber($num); echo $num;, а не $num = minusNumber($num);

$num = 10;

function minusNumber(&$num){
    $num--;
    if($num > 3){
        minusNumber($num);
    }
    return;
}


minusNumber($num);
echo $num;