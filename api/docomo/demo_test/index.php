<html>
	<head>
		<meta charset="utf-8">
		<title>属シチュ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">
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
          <button id="btn" class="my-btn">話す！</button>
        </div></div><br />
    		<form>
          <div id="sourcetext">--</div><br />
          <input style="display:none;" type="text" id="msg_human" value="" class="target">
          <br><br />
    		</form>
        <div  class="balloon">
          <p id="msg_ai">......</p>
        </div>
        <textarea style="display:none;" id="source">---</textarea>
        <script src="app.js"></script>
        <script src="api.js"></script>
        <?php
          include 'replace.php';
        ?>

      <div id="foot">
      </div>
    </div>
	</body>
</html>
