<?php 
// $black = '黒';
// $white = '白';
// $red = '赤';
// $number = 10;

$color[0] = '黒';
$color[1] = '白';
$color[2] = '赤';
//連番んであれば数字を入れずブラケットだけでもよい。(数字が省略できる)

//配列を一気に指定する
$color = ['黒','白','赤'];

//$color = array('黒','白','赤');//PHP5以前の書き方

$number = 10;
$myfavorite = 2;
echo $color[$myfavorite];
?>