<?php 
//合計を計算する-可変ｐラメータ
function sum(...$numbers){
    print_r($numbers);
    $answer = 0;
    foreach ($numbers as $num){
        $answer += $num;
    }
    return $answer;
}

$item_sum = sum(10,20,30,50,60,70,80,90,100);
echo $item_sum;
?>