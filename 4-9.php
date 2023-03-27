<?php 
require('4-9_include.php');//()は省略できる
echo sum(10, 15);
//includeは最後まで実行する。requireは途中まで止まる.
//例あれば表示。なければ非表示のバナーなど

require_once '4-9_include.php';
require_once '4-9_include.php';

// include_once

echo 'こんにちは';