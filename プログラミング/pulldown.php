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