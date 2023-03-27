<?php 
// $color = ['黒', '赤', '白'];
// print_r($color);

// $price =10000;
// $new_price = number_format($price);
// echo $price;
// echo "\n";
// echo $new_price;

//配列の先頭に文字をつなげる//リファレンス渡し
function add_head(&$target){
    for ($i=0; $i<count($target); $i++){
        $target[$i] = '●' .$target[$i];
    }
}

$color =['黒', '赤', '白'];
print_r($color);
add_head($color);
print_r($color);add_head($color);
print_r($color);

?>