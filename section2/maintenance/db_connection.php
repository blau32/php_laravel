<?php 

const DB_HOST = 'mysql:host=127.0.0.1;dbname=udemy_php_laravel;charset=utf8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'password123';



try{
  $pdo = new PDO(DB_HOST,DB_USER,DB_PASSWORD,[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
  ]);
  echo "connection succeeded ";
} catch (PDOException $e){
  echo 'connection failed '.$e->getMessage()."\n";
  exit();
}

?>