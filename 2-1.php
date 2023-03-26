<?php

echo '数字を入力して下さい　＞';
$number = trim(fgets(STDIN));

//10よりも大木かを判断する
if($number > 10){
    echo '10よりも大きいです';
} else {
    echo '10以下です';
}


/*
別の書き方
if ($number > 10):
    echo '10よりも大きいです';
else:
    echo '10以下です';
endif;
*/