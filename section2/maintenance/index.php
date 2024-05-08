<!-- データベースのデータを表示させる -->
<?php 

require "db_connection.php";

//データ取得のための SQLステートメント2種類
// ユーザー入力なし　query
// 毎回入力内容が決まっている場合
// まずSQL文を記述
// $sql = "select * from contacts where id = 4";
// $stmt = $pdo->query($sql);
// $result = $stmt->fetchall();

// echo "<pre>";
// var_dump($result);
// echo "<pre>";
// ユーザー入力あり
$sql = "select * from contacts where id = :id"; //名前付きplace holder 

// トランザクション処理
$pdo->beginTransaction();


try{
  $stmt = $pdo->prepare($sql);
$stmt->bindValue("id",2,PDO::PARAM_INT);
$stmt->execute();

  $pdo->commit();

}catch(PDOException $e){
  $pdo->rollback();
};

?>