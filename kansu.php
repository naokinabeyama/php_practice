<?php

// インプット引数 なし
// アウトプット戻り値 なし

function test(){
    //処理
    echo 'test';
}

test();
echo '<br>';


// インプット引数 あり
// アウトプット引数 なし
$commnt = 'コメント１';

function getComment($string){
    echo $string;
}

getComment($commnt);
echo '<br>';

// インプットなし
// アウトプットあり

function getNumeberOfComment() {
    return 5;
}

echo getNumeberOfComment();
echo '<br>';


//引数2つ
//戻り値あり

function sumPrice($int1, $int2){
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(3, 6);
echo $total;





?>
