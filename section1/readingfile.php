<?php 
// エラー(処理が止まる)
// require();
// require_once();

// 警告（処理は止まらない）
// include();
// include_once();

// __DIR__ __FILE__マジック定数
// 絶対パスの表示

require __DIR__ . '/common/common.php';
echo __DIR__;


// echo __DIR__;
// echo __FILE__;

require 'read_by_readingfile.php';
echo $commonVariable;
commonTest();

?>