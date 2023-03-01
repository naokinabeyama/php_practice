<?php 

$members = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

foreach($members as $member){
    echo $member;
};

echo '<br>';

foreach($members as $key => $value){
    echo $key . 'は' . $value . 'です'; 
};

echo '<br>';

for($i=0; $i < 10; $i++){
    if($i===5){
        continue;
    }
    echo $i;
    echo '<br>';
}





?>
