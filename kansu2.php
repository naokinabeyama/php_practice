<?php

// 日本語 SJIS, UTF-8 3~6バイト
$text = 'あいうえお';

// echo strlen($text);

echo mb_strlen($text);
echo '<br>';
//文字列の置換

$str = '文字列の置換をします';

echo str_replace('置換', 'ちかん', $str);


// 指定文字列で分割

$str_2 = '指定文字列で、分割します';

echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';


// 正規表現
// 文字か
// 数字か
// 郵便番号か
// メールアドレスか

$str_3 = '特定の文字列が含まれるか確認する';

echo preg_match('/文字列/', $str_3);
echo '<br>';

// 指定文字列から文字列を取得する

echo substr('あいう', 2);
echo '<br>';
echo mb_substr('あいうえお', 2, 2);

?>
