<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PM演習A班</title>
		<link rel="stylesheet" type="text/css" href="main.css">
<script type="text/javascript" src="main.js"></script>
  </head>
  <body>
		<div id="pageall" class="clear">
			
			<div id="leftframe">
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
						<td class="table" name="gazou" valign="top" rowspan="2" width="150" height="400" background="img/kurigohan.jpg" >主食・ごはん
<!主食　プルダウン> 
							<?php
								$link = mysql_connect("localhost", "root", "pass");
								$db = mysql_select_db("order_system", $link);
								echo "<form action=\"\" method=\"GET\">";
								echo "
									<select name=\"selc\" onchange=\"Selc(this)\">";
								$result = mysql_query("select * from 主食");
								while ($row = mysql_fetch_assoc($result)) {
								echo "<option value=".$row["カロリー"].">"
									.$row["食品名"]."</option>";
								}	
								mysql_free_result($result);
								mysql_close($link);
							?>
<P id="comt" style="font-weight : bold;color : green;">リストを選択してください。</P>
						</th>
						<td valign="top" colspan="2" width="200" height="200">おかず①<br />肉類．魚類<br /></th>
							<?php
								$link = mysql_connect("localhost", "root", "pass");
								$db = mysql_select_db("order_system", $link);
								echo "<form action=\"\" method=\"GET\">";
								echo "
									<select onchange=\"Selc1(this)\">";
								$result = mysql_query("select * from おかず1");
								while ($row = mysql_fetch_assoc($result)) {
								echo "<option value=".$row["カロリー"].">"
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
									<select onchange=\"Selc2(this)\">";
								$result = mysql_query("select * from おかず2");
								while ($row = mysql_fetch_assoc($result)) {
								echo "<option value=".$row["カロリー"].">"
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
									<select onchange=\"Selc3(this)\">";
								$result = mysql_query("select * from おかず3");
								while ($row = mysql_fetch_assoc($result)) {
								echo "<option value=".$row["カロリー"].">"
									.$row["食品名"]."</option>";
								}	
								mysql_free_result($result);
								mysql_close($link);
							?>
			 </td>
			</tr>
		</table>
			</div>

			<div id="rightframe">
					<P>主食・ごはん</P>
					<p><div id="comt" >0</div>Kcal</P>
					<P>おかず①</P>
					<p><div id="comt1">0</div>Kcal</P>
					<P>おかず②</P>
					<p><div id="comt2">0</div>Kcal</P>
					<P>おかず③</P>
					<p><div id="comt3">0</div>Kcal</P>
<p id="goukei">合計 

</P>

			</div>
		</div>
	<body>
</html>