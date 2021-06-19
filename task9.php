<?php
//9. Создайте функцию Pyramid(), которая будет принимать одна значение - число строк.
// Она должна формировать пирамиду, как на рисунке.

function Pyramid($countLine){
    for ($x = 0; $x <= $countLine; $x++ ){
        echo str_repeat($x, $x + 1). '<br/>';
    }
}

Pyramid(4);