<?php
session_start();

require "validation.php";

header("X-FRAME-OPTIONS:DENY");
if(!empty($_POST)){
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}

function h ($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
// どこからも参照でき、連装配列で代入される。
// your_nameがキーで、inputで入力された値がバリューとなる。

//  入力、確認、完了の3点を作成する場合、それぞれ独立したページを作成するときと、１つのページ内で切り替えて表示するタイプの2通りある。今回は後者で作成する

$pageFlag = 0;
$errors = validation($_POST);
// 今回はこの変数に与えられた数値によって表示を変更する。0が入力、1が確認、2が完了

if(!empty($_POST['btn_confirm'])&& empty($errors)){
    $pageFlag = 1;
}

if(!empty($_POST['btn_submit'])){
    $pageFlag = 2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if($pageFlag === 1) : ?>
<?php if($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
<form method="POST" action="input.php">
name
<?php echo h($_POST['your_name']) ;?>
<br>
email address
<?php echo h($_POST['email']) ;?>
<br>
homepage
<?php echo h($_POST['url']) ?>
<br>
gender
<?php 
if($_POST['gender']=== '0'){echo 'man';}
if($_POST['gender']=== '1'){echo 'woman';}
?>
<br>
age
<?php
    if($_POST['age'] === '1') {echo '~19' ; }
    if($_POST['age'] === '1') {echo '20~29' ; }
    if($_POST['age'] === '1') {echo '30~39' ; }
    if($_POST['age'] === '1') {echo '40~49' ; }
    if($_POST['age'] === '1') {echo '50~59' ; }
    if($_POST['age'] === '1') {echo '60~' ; }
?>
<br>
contact
<br>
<input type="submit" name="back" value="back" >
<!-- btnを押すとPOST内の値がなくなるため、最初の画面に戻るが、入力していた値は消えてしまうのpageFlag0で入力されていた値を表示させる。-->
<input type="submit" name="btn_submit" value="send">
<input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']) ;?>" >
<input type="hidden" name="email" value="<?php echo h($_POST['email']) ;?>" >
<input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']) ;?>" >
</form>
<?php endif; ?>
<?php endif; ?>

<?php if($pageFlag === 2 ): ?>
data send
<?php endif;?>


<?php if($pageFlag === 0) : ?>
<?php
if(!isset($_SESSION['csrfToken'])){
    $csrfToken = bin2hex(random_bytes(32));
    $_SESSION["csrfToken"] = $csrfToken;
}
$token = $_SESSION["csrfToken"];
?>

<form method="POST" action="input.php">
name
<input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo h($_POST['your_name']);}?>">
<!-- value以下は一度入力した値を表示させるためのもの -->
<br>
email address
<input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']);}?>">
<br>
homepage
<input type="url" name="url" value="<?php if(!empty($POST["url"])){echo h($_POST["url"]) ;}?>">
<br>
gender
<input type="radio" name="gender" value="0">man
<input type="radio" name="gender" value="1">woman
age
<select name="age">
    <option value="">choose your age</option>
    <option value="1">-19</option>
    <option value="2">20-29</option>
    <option value="3">30-39</option>
    <option value="4">40-49</option>
    <option value="5">50-59</option>
    <option value="6">60-</option>
</select>
<br>
contact
<textarea name="contact">
<?php if(!empty($POST["contact"])){echo h($_POST["contact"]) ;} ?>
</textarea>
<br>
<input type="checkbox" name="caution" value="1">check
<br>
<input type="submit" name="btn_confirm" value="confirm">
<input type="hidden" name="csrf" value="<?php echo $token;?>">
</form>
<?php endif; ?>

</body>
</html>

<?php ?>