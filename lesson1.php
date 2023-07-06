<?php
// 引数として数値を渡すと3倍にして返す関数を作ってください。


function sum($number){
    return $number * 3;
}

$i = 5;
$threetimes = sum($i);
echo $threetimes;


//echo convertThreeTimes(5);
// 15