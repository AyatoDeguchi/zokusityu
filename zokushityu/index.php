<?php
  include 'replace.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>属シチュ</title>
    <LINK rel="SHORTCUT ICON" href="img/E.ico">
    <link rel="stylesheet" href="my-btn.css" type="text/css" media="all">
    <link rel="stylesheet" href="foot.css" type="text/css" media="all">
    <style>
      body{
        background-image: url("img/haikei.png");
        background-position: center center;
        -moz-background-size:auto 100%;
        background-size:auto 100%;
        margin: 0;
      }
      .bkRGBA{
        /* 背景画像の透過用css */
        height: 100%;
        background: rgba(255,255,255,0.5);
      }

      .check_box{
        display: inline-block;
        font-size: 16px;
      }

      .check_boxContainer{
        font-size: 0;
      }

    </style>
  </head>

	<body style="text-align: center;">
    <div class="bkRGBA">
      <div style="height: auto;" onclick = "mainClick()">
        <br /><br /><br />
    		<h1 style="">属性別 シチュエーション♪</h1>
        <br /><br /><br />
        <div class="check_boxcomtainer">
          <div class="check_box">
            <button id="btn" class="my-btn">入力！</button>
          </div>
        </div><br />
      </div>
    		<form>
          <div style="height: auto;" onclick = "mainClick()">
    			   <textarea rows="4" style="margin-top:20px;padding:10px;width:309px" cols="40" id="sourcetext"
    			   >あなたのことが好きです</textarea>
            <br><br /><br />
          </div>
          <div class="check_boxcomtainer">
            <div class="check_box">
              <input type="button" id="convert_S" class="my-btn_s" value="ドS">
            </div>
            <div class="check_box">
              <input type="button" id="convert_tsu" class="my-btn_tsu" value="ツンデレ">
            </div>
            <div class="check_box">
              <input type="button" id="convert_imo" class="my-btn_imo" value="妹">
            </div>
          </div>
    		</form>
        <div style="height: 30%;" onclick = "mainClick()">
          <script src="app.js"></script>
        </div>
      <div id="foot">
      </div>
    </div>
	</body>
</html>
