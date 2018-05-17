<?php
  //include 'replace.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>属シチュ</title>
		<script src="app.js"></script>
		<script src="api.js"></script>
    <link rel="stylesheet" href="my-btn.css" type="text/css" media="all">
    <link rel="stylesheet" href="foot.css" type="text/css" media="all">
    <link rel="stylesheet" href="index.css" type="text/css" media="all">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  </head>

	<body style="text-align: center;">
    <div class="bkRGBA">
        <br /><br /><br />
    		<h1 style="">♪</h1>
        <br /><br /><br />
        <div class="check_boxcomtainer"><div class="check_box">
          <button id="btn" class="my-btn_s">話す！</button>
					<button id="btn" class="my-btn_tsu">話す！</button>
					<button id="btn" class="my-btn_imo">話す！</button>
        </div></div><br />
    		<form>
    		  <div id="sourcetext">--</div>
          <input style="display:none;" type="text" id="talkapi__input" value="こんにちは" class="target">
          <button id="talkapi__request" type="button">リクエスト</button>
          <p id="talkapi__reply"></p>
          <br><br /><br />
        </form>
      <div id="foot">
      </div>
    </div>
	</body>
</html>
