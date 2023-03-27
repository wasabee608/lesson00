<?php
$number1 = 10;//int型(整数型)
$number2 = '10';//string型(文字列型)

//型キャスト
if ($number1 === (int)$number2){
    echo '同じです';
} else {
    echo '違います';
}