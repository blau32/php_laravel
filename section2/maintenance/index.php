<!-- データベースのデータを表示させる -->
<?php 

require "db_connection.php";

//データ取得のための SQLステートメント2種類
// ユーザー入力なし　query
// 毎回入力内容が決まっている場合
// まずSQL分を記述
$sql = "select * from contacts where id = 4";
$stmt = $pdo->query($sql);
$result = $stmt->fetchall();

echo "<pre>";
var_dump($result);
echo "<pre>";
// ユーザー入力あり　

?>