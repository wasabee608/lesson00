<?php 
$color = ['黒','白','赤'];
// $max = count($color);

// array_unshift($color, '緑', '黄');

// array_push($color, '緑', '黄');
// $color[] = '緑';
// $color[] = '黄';

// $mycolor = array_pop($color);
// echo $mycolor;
// $mycolor = array_pop($color);
// echo $mycolor;

$color_string = implode(',', $color);
$color_string = ',緑,黄';//黒白赤緑黄
$newarray = explode(',', $color_string);

print_r($color_string);
print_r($newarray);
 ?>