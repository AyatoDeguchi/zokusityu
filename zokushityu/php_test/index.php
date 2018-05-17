<?php
  include 'replace.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ワーカーを作成しデータのやりとりをする</title>
		<link rel="stylesheet" href="css/main.css" type="text/css" media="all">
  </head>

	<body>
		<h1>ワーカーを作成しデータのやりとりをする</h1>
		<form>
			文章：<textarea rows="5" cols="30" id="sourcetext"
			>今日は快晴で、雲がひとつもないです。明日もよい天気になりそうです。
			</textarea><br>
			<input type="button" id="convert2" value="語尾を変換">
		</form>
		<div id="result"></div>
	</body>
</html>
