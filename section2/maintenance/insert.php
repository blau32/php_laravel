<?php 
// DB connection 
require "db_connection.php";
// input save prepare bind execute

$params = [
  "id" => null,
  "your_name"=> "name",
  "email" => "test@test.com",
  "gender" => "1",
  "age" => "2",
  "contact" => "bbb",
  "created_at"=> null
];

$count = 0;
$columns = "";
$values = "";

foreach(array_keys($params) as $key){
  if($count++>0){
    $columns .= ",";
    $values .= ",";
  }
  $columns .=$key;
  $values .= ":".$key;
}


$sql = "insert into contacts(". $columns.")values(".$values.")";

var_dump($sql);

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

?>