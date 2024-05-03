<?php

session_start();

require "validation.php";

header ('X-FRAME-OPTIONS:DENY');
if(!empty($_POST)){
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

$pageFlag = 0;
$errors = validation($_POST);

if(!empty($_POST["btn_confirm"]) && empty($errors)){
    $pageFlag = 1;
}

if(!empty($_POST["btn_submit"])){
    $pageFlag = 2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>

<!-- page0 ------------------------------------------->
<?php if($pageFlag === 0) : ?>
<?php
if(!isset($_SESSION["csrfToken"])){
    $csrfToken = bin2hex(random_bytes(32));
    $_SESSION["csrfToken"] = $csrfToken;
}
$token = $_SESSION["csrfToken"];
?>

<?php
if(!empty($errors) && !empty($_POST["btn_confirm"])) :?>
<?php echo "<ul>" ; ?>
<?php
    foreach($errors as $error){
        echo "<li>" . $error . "</li>";
    }
?>
<?php "</ul>"; ?>
<?php endif; ?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
    <form method="POST" action="input.php">
    <div class="form-group"> 
        <label for="your_name">name</label>
        <input type="text" class="form-control" id="your_name" name="your_name" value="<?php if(!empty($_POST["your_name"])){echo h($_POST["your_name"]);}?>" required>
    </div>

    <div class="form_group">
        <label for="email">mail address</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php if(!empty($_POST["email"])){echo h($_POST["email"]);}?>" required>
    </div>

    <div class="form_group">
        <label for="url">homepage</label>
        <input type="url" class="form-control" id="url" name="url" value="<?php if(!empty($_POST["url"])){echo h($_POST["url"]);}?>" required>
    </div>
    gender
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="gender" id="gender1"value="0"
        <?php  if(!empty($_POST["gender"] ) && $_POST["gender"] === "0")
        {echo "checked";}?>>
        <label class="form-check-label" for="gender1">man</label>
        <input type="radio" class="form-check-input" name="gender" id="gender2"value="1"
        <?php  if(!empty($_POST["gender"] ) && $_POST["gender"] === "1");
        {echo "checked";}?>>
        <label class="form-check-label" for="gender2">woman</label>
    </div>

    <div class="form-group">
    <label for="age">age</label>
    <select class="form-control" id="age" name="age">
        <option value="">choose your age</option>
        <option value="1">-19</option>
        <option value="2">20-29</option>
        <option value="3">30-39</option>
        <option value="4">40-49</option>
        <option value="5">50-59</option>
        <option value="6">60-</option>
    </select>
    </div>

    <div class="form-group">
    <label for="contact">contact</label>
    <textarea class="form-control" row="3" id="contact" name="contact">
    <?php if(!empty($_POST["contact"])){echo h($_POST["contact"]);}?></textarea>
    
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="caution" name="caution" value="1">
        <label class="form-check-label" for="caution">check caution</label>
    </div>

    <input class="btn btn-info" type="submit" name="btn_confirm" value="check">
    <input type="hidden" name="csrf" value="<?php echo $token; ?>">
    </form>

    </div>
  </div>
</div>

<?php endif; ?>

<!-- page1 --------------------------------------------->
<?php if($pageFlag === 1) : ?>
<?php if($_POST["csrf"] === $_SESSION["csrfToken"]) : ?>
<form method="POST" action="input.php">
name:
<?php echo h($_POST["your_name"]) ;?>
<br>
mail address
<?php echo h($_POST["email"]) ;?>
<br>
homepage
<?php echo h($_POST["url"]) ?>
<br>
gender
<?php
if($_POST["gender"] === "0"){echo "man";}
if($_POST["gender"] === "1"){echo "woman";}
?>
<br>
age
<?php
    if($_POST["age"] === "1" ){ echo "-19";}
    if($_POST["age"] === "2" ){ echo "20-29";}
    if($_POST["age"] === "3" ){ echo "30-39";}
    if($_POST["age"] === "4" ){ echo "40-49";}
    if($_POST["age"] === "5" ){ echo "50-59";}
    if($_POST["age"] === "6" ){ echo "60-";}
?>
<br>
contact
<?php echo h($_POST["contact"]) ?>
<br>

<input type="submit" name="back" value="back">
<input type="submit" name="btn_submit" value="send">

<input type="hidden" name="your_name" value="<?php echo h($_POST["your_name"]);?>">
<input type="hidden" name="email" value="<?php echo h($_POST["email"]); ?>">
<input type="hidden" name="url" value="<?php echo h($_POST["url"]); ?>">
<input type="hidden" name="gender" value="<?php echo h($_POST["gender"]); ?>">
<input type="hidden" name="age" value="<?php echo h($_POST["age"]); ?>">
<input type="hidden" name="contact" value="<?php echo h($_POST["contact"]); ?>">

<input type="hidden" name="csrf" value="<?php echo h($_POST["csrf"]); ?>">
<?php endif; ?>
<?php endif; ?>

<!-- page2 ------------------------------------------------->
<?php if($pageFlag === 2) : ?>
<?php if($_POST["csrf"] === $_SESSION["csrfToken"]) : ?>
email sent
<?php unset($_SESSION["csrfToken"]); ?>
<?php endif; ?>
<?php endif; ?>
</form>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 </body>
</html>