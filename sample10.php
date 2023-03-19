<?php 
echo '数字を入力して下さい';
//$number = fgets(STDIN);
//$number = trim($number);
$number = trim(fgets(STDIN));
echo $number, 'ですね？';

?>