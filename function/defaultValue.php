<?php 

ini_set("display_errors",1);
// 指定した設定オプションの値を設定します。 設定オプションは、スクリプトの実行中は新しい値を保持し、 スクリプト終了時に元の値へ戻されます。
// display_errors = 'On' または display_errors = 1:
// この設定はエラーが発生した場合にブラウザ上にエラーメッセージを表示します。開発時には非常に役立ちますが、エラーメッセージがセンシティブな情報を含むことがあるため、公開サーバーでは使用すべきではありません。

// display_errors = 'Off' または display_errors = 0:
// 本番環境では、この設定を使ってエラーメッセージの表示をオフにするべきです。エラー情報は依然としてログファイルに記録されますが、ブラウザには表示されません。
error_reporting(E_ALL);
// error_reporting(E_ALL); は PHP の関数で、実行時にどの種類の PHP エラーが報告されるかを設定するために使用されます。この設定に E_ALL を指定することで、すべてのエラーレベルが報告されるようになります。これには、警告（warnings）、通知（notices）、致命的なエラー（fatal errors）、およびその他の全てのエラーが含まれます。

function defaultValue($string=null)
{
  echo "This is ".$string.".";
}

// no argument
defaultValue();
echo "<br>";

// with argument
defaultValue("test");
?>