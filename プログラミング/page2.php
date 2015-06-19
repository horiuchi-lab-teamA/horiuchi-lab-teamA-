<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
      <title>PM演習A班</title>
  </head>
  <body>
		<P>主食・ごはん</P>
<?php
$a = @$_POST["syusyoku"];
print "渡された値：".$a;
exit;
?>
if (isset($_GET['syusyoku'])){
echo h($_GET['syusyoku']);
}
mysql_free_result($result);
mysql_close($link);
?>Kcal
  </body>
</html>