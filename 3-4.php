<?php 
// $book[0][0] = 'デザイン入門';
// $book[0][1] = 'デザインの基礎';

// $book[1][0] = 'PHP入門';
// $book[1][1] = '高度なPHP開発';
// $book[1][2] = 'Laravel入門';

$book = [
    ['デザイン入門','デザインの基礎'],
    ['PHP入門','高度なPHP開発','Laravel入門']
];

echo $book[1][2];
print_r($book);
?>