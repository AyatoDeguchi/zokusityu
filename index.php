<html>
	<head>
		<meta charset="utf-8">
		<title>属シチュ</title>
		<LINK rel="SHORTCUT ICON" href="img/E.ico">
		<link rel="stylesheet" href="my-btn.css" type="text/css" media="all">
		<link rel="stylesheet" href="foot.css" type="text/css" media="all">
    <link rel="stylesheet" href="head.css" type="text/css" media="all">
		<link rel="stylesheet" href="index.css" type="text/css" media="all">
		<link rel="stylesheet" href="balloon.css" type="text/css" media="all">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>

		<?php
		  include 'replace.php';
		?>
  </head>

	<body style="/*text-align: center;*/">
    <div class="bkRGBA">
        <div id="head">
          <div id="head_left">
            <img src="img/属性別シチュエーション.png"/>
          </div>
          <div id="head_right">
            <div style="text-align: left;margin:5px;">・話したいキャラを押してください。<br />・タスクバーの赤が光っているときに喋りかけてください。</div>
            <div class="check_boxcomtainer"><div class="check_box">
    					<button id="my-btn_s" class="my-btn_s" onClick="btn_con_s();">ドＳ</button>
    					<button id="my-btn_tsu" class="my-btn_tsu" onClick="btn_con_tsu();">ツンデレ</button>
    					<button id="my-btn_imo" class="my-btn_imo" onClick="btn_con_imo();">妹</button>
            </div></div>
          </div>
        </div>
        <div id=main>
      		<form class="from_pad">
      		  <div id="sourcetext" class="balloon1-left">--</div>
            <input style="display:none;" type="text" id="talkapi__input" value="--" class="target">
  					<input style="display:none;" type="button" id="convert_S" value="ドS">
  					<input style="display:none;" type="button" id="convert_tsu" value="ツンデレ">
  					<input style="display:none;" type="button" id="convert_imo" value="妹">
  					<input style="display:none;" type="button" id="talkapi__request" value="リクエスト">
            <div style="display:none;" class="foot_henshin">
							<p style="margin-left:20px;" id="talkapi__reply"></p>
						</div>
            <br><br /><br />
          </form>
        </div>
      <div id="foot">
      </div>
			<script src="api.js"></script>
			<script src="app.js"></script>
    </div>
	</body>
</html>
