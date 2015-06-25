<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PM演習A班</title>
		<link rel="stylesheet" type="text/css" href="main.css">
<script type="text/javascript" src="main.js"></script>
  </head>
  <body><form name="form">
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
						<td id="gazou1" name="gazou1" valign="top" rowspan="2" >主食・ごはん<br />
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
						</td>
						<td id="gazou2" name="gazou2" valign="top" colspan="2" >おかず①<br />肉類．魚類<br />
							<?php
								$link = mysql_connect("localhost", "root", "pass");
								$db = mysql_select_db("order_system", $link);
								echo "<form action=\"\" method=\"GET\">";
								echo "
									<select name=\"selc1\" onchange=\"Selc1(this)\">";
								$result = mysql_query("select * from おかず1");
								while ($row = mysql_fetch_assoc($result)) {
								echo "<option value=".$row["カロリー"].">"
									.$row["食品名"]."</option>";
								}	
								mysql_free_result($result);
								mysql_close($link);
							?>
					</td></tr>
					<tr>
						 <td id="gazou3" name="gazou3" valign="top">おかず②<br />野菜類
							<?php
								$link = mysql_connect("localhost", "root", "pass");
								$db = mysql_select_db("order_system", $link);
								echo "<form action=\"\" method=\"GET\">";
								echo "
									<select name=\"selc2\" onchange=\"Selc2(this)\">";
								$result = mysql_query("select * from おかず2");
								while ($row = mysql_fetch_assoc($result)) {
								echo "<option value=".$row["カロリー"].">"
									.$row["食品名"]."</option>";
								}	
								mysql_free_result($result);
								mysql_close($link);
							?>
			</td>
			 <td id="gazou4" name="gazou4" valign="top">おかず③<br />その他
							<?php
								$link = mysql_connect("localhost", "root", "pass");
								$db = mysql_select_db("order_system", $link);
								echo "<form action=\"\" method=\"GET\">";
								echo "
									<select name=\"selc3\" onchange=\"Selc3(this)\">";
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
		</form>
			</div>

			<div id="rightframe">
					<P>主食・ごはん</P>
					<p><span id="comt" >0</span>Kcal</P>
					<P>おかず①</P>
					<p><span id="comt1">0</span>Kcal</P>
					<P>おかず②</P>
					<p><span id="comt2">0</span>Kcal</P>
					<P>おかず③</P>
					<p><span id="comt3">0</span>Kcal</P>
<p>合計<span id="goukei">0</span>Kcal						一食当たりのカロリー規定値　660Kcal</P>
<input name="openWin" type="button" value="このメニューで印刷する" onClick="openwin()">
</input>
<p id="keikoku"><p>
			</div>
		</div>
	<body>
</html>