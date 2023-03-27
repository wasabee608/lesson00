<?php 
declare(strict_types=0);//1でON
$tax = 10; //消費税
//足し算の結果を返す //スコープ
function sum(int $a, int $b): int{
    global $tax;
    $ret = ($a + $b) * ($tax / 100 +1);

    return $ret;
}

$num1 = 100;
$num2 = 20;

$answer = sum($num1,$num2);
echo $answer;
?>