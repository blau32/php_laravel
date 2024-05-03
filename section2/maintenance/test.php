<?php 
// echo __FILE__;
// // パスワードを記録したファイルの場所

// // パスワード
// echo(password_hash("password123", PASSWORD_BCRYPT));
?>

<?php 

// $contactFile = '.contact.dat';

// $fileContents = file_get_contents(".contact.dat");
// // ファイルの内容を単純に文字列として読み込むために使用されます。この関数はファイルからデータを読み取り、その内容を変数に保存します。
// echo $fileContents;

?>

<?php 

// $contactFile = '.contact.dat';

// // $fileContents = file_get_contents(".contact.dat");

// file_put_contents($contactFile, "this is a test");

?>

<?php 

// $contactFile = '.contact.dat';

// // $fileContents = file_get_contents(".contact.dat");

// file_put_contents($contactFile, "this is a test", FILE_APPEND);

?>

<?php 

// $contactFile = '.contact.dat';

// $addText = "this is a test"."\n";

// file_put_contents($contactFile, $addText, FILE_APPEND);

?>

<?php 

// $contactFile = '.contact.dat';

// $fileContents = file_get_contents(".contact.dat");

// $allData = file($contactFile);

// foreach($allData as $lineData){
//   $lines = explode("," , $lineData);
//   echo $lines[0]."<br>";
//   echo $lines[1]."<br>";
//   echo $lines[2]."<br>";
// }

?>

<?php 

$contactFile = '.contact.dat';

$contents = fopen($contactFile, "a+");

$addText = "adding 1 Line"."\n";

fwrite($contents, $addText);

fclose($contents);

?>