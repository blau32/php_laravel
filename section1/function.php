<?php 

function test1(){
    echo 'test'.'<br>';
}
test1();

function test2($string){
    echo $string.'<br>';
}
test2('this is test2');

$hikisu1 = 'hikisudayo';
function test2_1($hikisu1){
    echo $hikisu1.'<br>';
}
test2_1('this is test2_1');

$hikisu2 = 'hikisudayo2';
function test2_2($hikisu){
    echo $hikisu.'<br>';
    // 引数と関数内に記述する変数は同一でなければならない
}
test2_2('this is test2_2');

function getNum($num1, $num2){
    // $num1 + $num2;
    $num3 = $num1 + $num2;
    return $num3;
}
$total = getNum(10, 5);
echo $total.'<br>';


// 組み込み関数
// マルチバイト文字列→英字数字以外
$text = 'four';
echo strlen($text).'<br>';

$text2 = 'よんもじ';
echo $text2.'<br>';
echo strlen($text2).'<br>';
echo mb_strlen($text2).'<br>';
/*
12と表示される。
UTF-8では日本語は3～6バイト利用する
*/

$text3 = '三文字';
echo $text3.'<br>';
echo strlen($text3).'<br>';
echo mb_strlen($text3).'<br>';


// 置換
$text4 = '文字列だよ';
echo str_replace('文字列','もじれつ',$text4);

// 指定文字列で分割
$text5 ='指定文字列で分割';
echo '<pre>';
var_dump(explode('で',$text5));
echo '<pre>';

// 指定文字列で結合
$text6 = '指定文字列';
$text7 = 'で結合';

// preg_match('/文字列/', $str_3);


// 文字列から文字列を取得
echo substr('指定文字列',3).'<br>';
echo substr('abcde',3).'<br>';
// ～文字+1以降からとなる

?>