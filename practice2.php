<?php 

// if (条件) {
//     条件が真なら
// }

// if (条件) {
//     条件が真なら
// } else {
//     条件が偽なら
// }

$height = 900;

if ($height === 90){
    echo '身長は' . $height . 'cmです';
}else{
    echo '身長は' . $height . 'cmではありません';
}

echo '<br/>';
$signal = 'blue';

if ($signal === 'red') {
    echo '止まれ';
} else if($signal === 'yellow') {
    echo '一旦停止';
} else {
    echo '進め';
}



// == 一致
// === 型も一致



?>
