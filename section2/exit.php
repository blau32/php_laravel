<!-- http://localhost/php_test/section2/exit.php -->
<?php 

// $test = 123;
// $test2 = 456;

// echo $test;
// var_dump($test);
// exit;
// // ここで処理を止める
// // for文のbreak的な
// echo $test2;

$user = $_GET['user']; // JohnDoe
$age = $_GET['age']; // 30

echo "ユーザー名: " . $user . ", 年齢: " . $age;
?>

