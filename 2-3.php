<?php
$gender = '男性';
$age = 21;

// if ($gender == '男性'){
//     if ($age == 20){
//     echo '男性で20歳ですね？';
//     }
// }

// if ($gender == '男性' && $age ==20){
//     echo '男性で20歳ですね？';
// }

// if ($gender == '男性' xor $age == 20){
//     echo '20歳ではない男性か、20歳の女性ですね？';
// }

if ($gender == '男性' && ($age == 20 || $age ==21)){
    echo '男性で、20歳か21歳ですね？';
}
//論理演算子||(or)を使うときは順番に注意。
echo<<<EOT
複数の条件がある際に後に||を使ってしまうと前の条件に合致してなくても後の条件に合致してれば条件を満たしたことになってしまう。
||と他の物を組み合わせる場合は()で括る。
EOT;