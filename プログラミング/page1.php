<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
      <title>PM演習A班</title>
  </head>
  <body>
    <p>弁当メニュー選択システムへようこそ！</P>
    <p>ここでは，あなたの好みに応じた弁当のメニューを選択できます！</p><br />
    <p>使い方</p>
    <ol>
			<li>下記のプルダウンメニューをクリックして，好きな商品を選択してください</li>
			<li>食品を選択すると，カロリーが表示されます</li>
			<li>カロリーの合計が，規定値(660Kcal)を超えていなければ，印刷ボタンを押してこのページを印刷してください</li>
			<li>印刷した用紙を，あなたの会社の食堂に提出しましょう！</li>
		</ol>
		<table border="1" cellspacing="0">
			<tr>　
				<td valign="top" rowspan="2" width="150" height="400">主食・ごはん
					<?php
						$link = mysql_connect("localhost", "root", "pass");
						$db = mysql_select_db("order_system", $link);
						echo "<form action=\"\" method=\"GET\">";
						echo "
							<select name=\"syusyoku\" >";
							$result = mysql_query("select * from 主食");
							while ($row = mysql_fetch_assoc($result)) {
							echo "<option value=\"1" .$row["食品名"]."\" >"
							.$row["食品名"]."</option>";
						}	
						mysql_free_result($result);
						mysql_close($link);
					?>
				</th>
				<td valign="top" colspan="2" width="200" height="200">おかず①<br />肉類．魚類<br /></th>
					<?php
						$link = mysql_connect("localhost", "root", "pass");
						$db = mysql_select_db("order_system", $link);
						echo "<form action=\"\" method=\"GET\">";
						echo "
							<select name=\"1shouhin_select\" >";
							$result = mysql_query("select * from おかず1");
							while ($row = mysql_fetch_assoc($result)) {
							echo "<option value=\"2" .$row["食品名"]."\" >"
							.$row["食品名"]."</option>";
						}	
						mysql_free_result($result);
						mysql_close($link);
					?>
			</tr>
			<tr>
			 <td valign="top" width="100" height="200">おかず②<br />野菜類
			 					<?php
						$link = mysql_connect("localhost", "root", "pass");
						$db = mysql_select_db("order_system", $link);
						echo "<form action=\"\" method=\"GET\">";
						echo "
							<select name=\"2shouhin_select\" >";
							$result = mysql_query("select * from おかず2");
							while ($row = mysql_fetch_assoc($result)) {
							echo "<option value=\"3" .$row["食品名"]."\" >"
							.$row["食品名"]."</option>";
						}	
						mysql_free_result($result);
						mysql_close($link);
					?>
			 </td>
			 <td valign="top" width="100" height="200">おかず③<br />その他
			 					<?php
						$link = mysql_connect("localhost", "root", "pass");
						$db = mysql_select_db("order_system", $link);
						echo "<form action=\"\" method=\"GET\">";
						echo "
							<select name=\"3shouhin_select\" >";
							$result = mysql_query("select * from おかず3");
							while ($row = mysql_fetch_assoc($result)) {
							echo "<option value=\"4" .$row["食品名"]."\" >"
							.$row["食品名"]."</option>";
						}	
						mysql_free_result($result);
						mysql_close($link);
					?>
			 </td>
			</tr>
		</table>
  </body>
</html>