<?php
//足し算をするファンクション
function sum($num1, $num2){
    $answer = $num1 + $num2;

    return $answer;//返り値のあるファンクション

    echo '画面に表示しました';//return以降の処理は無視される。
}

$item_sum = sum(167, 269);
echo $item_sum;

 ?>