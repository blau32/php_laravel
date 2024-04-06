<?php 

$globalVariable = 'this is global variable';

function checkScope(){
    $localVariable = 'this is local variable';
    echo $localVariable;
    global $globalVariable;
}

checkScope();
// echo '<br>';
// echo $globalVariable;
// echo '<br>';
// echo $localVariable;
?>