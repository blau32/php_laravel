<?php 
function my_callback_function() {
  echo "Hello, this is a callback!";
}

function execute_callback($callback) {
  if (is_callable($callback)) {
      $callback();
  } else {
      echo "Not a valid callback function.";
  }
}

// 関数名を文字列として渡す
execute_callback('my_callback_function');

$array = [1, 2, 3, 4, 5];
$result = array_map(function($n) {
    return $n * 3;
}, $array);

print_r($result);


function add($a, $b) {
  return $a + $b;
}

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$result = array_map('add', $array1, $array2);

print_r($result);


?>