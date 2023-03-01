<?php

$array = ['aaa',2,99];

$array2 = [
    ['赤', '青', '黄'],
    ['緑', '紫', '黒']
];

echo '<pre>';
var_dump($array2);
echo '</pre>'; 

$array_member = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

echo $array_member['hobby'];
echo '<pre>';
var_dump($array_member);
echo '</pre>';


$array_member2 = [
    '1kumi' => [
        '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
        ],
        '香川' => [
            'height' => 165,
            'hobby' => 'サッカー'
        ]
    ],
    '2kumi' => [
        '長友' => [
        'height' => 150,
        'hobby' => 'サッカー'
        ],
        '乾' => [
            'height' => 165,
            'hobby' => 'サッカー'
        ]
    ],
    
];

echo $array_member2['2kumi']['長友']['height'];
echo '<pre>';
var_dump($array_member2);
echo '</pre>';

?>
