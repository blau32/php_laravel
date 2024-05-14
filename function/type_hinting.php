<?php

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

typeTest(['array']);
// 指定した引数とは異なる方の引数が入るとエラー

?>