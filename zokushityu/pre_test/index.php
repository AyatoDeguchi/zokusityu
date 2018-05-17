<?php
  include 'replace.php';
  //rgba(255,176,227,0.5)
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>属シチュ</title>
    <link rel="stylesheet" href="my-btn.css" type="text/css" media="all">
    <script src="storage.js"></script>
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
      #foot {
        /* ▼表示位置を画面の右下に固定 */
        position: fixed; /* ←表示場所を固定 */
        bottom: 18px;   /* ←下端からの距離 */
        right: 18px;    /* ←右端からの距離 */
        left: 18px;
        background-color:#424242;
        opacity: 0.9;             /* ←透明度 */
        padding: 0;
        margin: 0;
        /*width: 90%;*/
        height: 225px;
        line-height: 90px;
        text-align: left;
        display: inline-block;
        border-radius: 5%;
        font-size: 50px;
        /* ▼最初は非表示にしておく */
        display: none;
      }
      #foot_left{
        /* ▼表示位置を画面の右下に固定 */
        position: fixed; /* ←表示場所を固定 */
        bottom: 18px;   /* ←下端からの距離 */
        left: 18px;
        opacity: 0.9;             /* ←透明度 */
        padding: 0;
        margin: 0;
        width: 72.5%;
        height: 205px;
        line-height: 90px;
        text-align: left;
        display: inline-block;
        border-radius: 5%;
        font-size: 50px;
        /* ▼最初は非表示にしておく */
        /*display: none;*/
      }
      #foot_right{
        /* ▼表示位置を画面の右下に固定 */
        position: fixed; /* ←表示場所を固定 */
        bottom: 18px;   /* ←下端からの距離 */
        right: 18px;
        /*background-color:#81F7F3;
        opacity: 0.9;*/             /* ←透明度 */
        padding: 0;
        margin: 0;
        height: auto;
        line-height: 90px;
        text-align: left;
        display: inline-block;
        border-radius: 5%;
        font-size: 50px;
        /* ▼最初は非表示にしておく */
        /*display: none;*/
      }
    </style>
  </head>

	<body style="text-align: center;">
    <div class="bkRGBA">
      <br /><br /><br />
  		<h1 style="">属性別 シチュエーション♪</h1>
      <br /><br /><br />
      <div class="check_boxcomtainer">
        <div class="check_box">
          <button id="btn" class="my-btn">入力！</button>
        </div>
      </div><br />
  		<form>
  			<textarea rows="4" style="margin-top:20px;padding:10px;width:309px" cols="40" id="sourcetext"
  			>あなたのことが好きです</textarea>
        <br><br /><br />
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
      <script src="app.js"></script>
      <div id="foot">
      </div>
    </div>
	</body>
</html>
