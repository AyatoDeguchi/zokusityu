<html>
	<head>
		<meta charset="utf-8">
		<title>属シチュ</title>
		<link rel="stylesheet" href="my-btn.css" type="text/css" media="all">
		<link rel="stylesheet" href="foot.css" type="text/css" media="all">
		<link rel="stylesheet" href="index.css" type="text/css" media="all">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>

		<?php
		  include 'replace.php';
		?>
  </head>

	<body style="text-align: center;">
    <div class="bkRGBA">
        <br /><br /><br />
    		<h1 style="">属性別シチュエーション♪</h1>
        <br /><br /><br />
        <div class="check_boxcomtainer"><div class="check_box">
          <!--<button id="btn" class="my-btn_s">話す！</button>
					<button id="btn" class="my-btn_tsu">話す！</button>
					<button id="btn" class="my-btn_imo">話す！</button>-->
					<button id="my-btn_s" class="my-btn_s" onClick="btn_con_s();">話す！</button>
					<button id="my-btn_tsu" class="my-btn_tsu" onClick="btn_con_tsu();">話す！</button>
					<button id="my-btn_imo" class="my-btn_imo" onClick="btn_con_imo();">話す！</button>
        </div></div><br />
    		<form>
    		  <div id="sourcetext">--</div>
          <input style="display:none;" type="text" id="talkapi__input" value="こんにちは" class="target">
					<input style="display:none;" type="button" id="convert_S" value="ドS">
					<input style="display:none;" type="button" id="convert_tsu" value="ツンデレ">
					<input style="display:none;" type="button" id="convert_imo" value="妹">
					<input style="display:none;" type="button" id="talkapi__request" value="リクエスト">
          <p id="talkapi__reply"></p>
          <br><br /><br />
        </form>
      <div id="foot">
      </div>
			<script src="api.js"></script>
			<script src="app.js"></script>
    </div>
	</body>
</html>
