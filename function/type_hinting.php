<?php

declare(strict_types=1);
// 厳密な型チェック
// 関数やメソッドの引数、戻り値において型の自動変換が行われなくなり、完全に型が一致していないとエラーが発生します。


ini_set("display_errors", 1);
error_reporting(E_ALL);

echo "type_hinting_test"."<br>";

// @param $string

function noTypeHint($string)
{
  var_dump($string);
}

noTypeHint(['test']);
echo '<br>';

function typeTest(string $string)
{
  var_dump($string);
}

// typeTest(['array']);
// 指定した引数とは異なる方の引数が入るとエラー

?>