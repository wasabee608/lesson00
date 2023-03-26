<?php
$number = 10;

$numeric = is_numeric($number);

if ($numeric){// == true　省略可能
    echo '数字です';
} else {
    echo '数字ではありません';
}