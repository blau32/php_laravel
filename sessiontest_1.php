<?php 
session_start();
?>

<html>
<head></head>
<body>
  <?php 
  if(!isset($_SESSION["visited"])){
    echo "this is first time";

    $_SESSION["visited"] = 1;
    $_SESSION["date"] = date("c");
    //  date("c") 関数は、指定されたフォーマットで日付をフォーマットして返します。フォーマット文字 c は、日付と時刻を ISO 8601 形式で表現します。この形式は、日付と時刻の国際的な標準であり、特にデータ交換において広く利用されています。
  } else {

    $visited = $_SESSION["visited"];
    $visited++;
    $_SESSION["visited"] = $visited;

    echo "This is ".$_SESSION["visited"]." times<br>";

    if(isset($_SESSION["date"])){
      echo "last time was".$_SESSION["date"].".<br>";
      $_SESSION["date"] = date("c");
    }

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    echo "<pre>";
    var_dump($_COOKIE);
    echo "</pre>";
    
  }
  
  ?>
</body>
</html>