<?php

$globalVariable = 'グローバル変数です';

function checkScope(){
    $localVariable = 'ローカル変数です';
    echo $localVariable;
    global $globalVariable;
    echo $globalVariable;
}

echo $globalVariable;
checkScope();

?>
