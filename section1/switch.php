<?php 
$data = 5;

switch($data){
    case 1:
        echo 'this is 1';
        break;
    case 2:
        echo 'this is 2';
        break;
    case 3:
        echo 'this is 3';
        break;
    case 4:
        echo 'this is 4';
        break;
    default:
        echo 'except 1~4';
}
// switchは===ではなく==なのでデータ型に注意
?>