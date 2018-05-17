<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>zip358.com:雑談API｛ドコモ｝</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
   <script>
  $(function() {
    $( "#msg_set" ).click(function() {
       $("#msg_ai").html("");
       $.ajax({
            type: "POST",
            url: "json.php",
            data:{
                msg:$("#msg_human").val()
            },
            dataType: 'json',
            success: function(obj){
              //alert(obj.txt);
              $("#msg_ai").html(obj.aiman);
            }
        });
    });
  });
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71682075-1', 'auto');
  ga('send', 'pageview');

</script>
  <style>
      table, td, th { border: 2px #808080 solid; }
  </style>
</head>
<body>
<h2>雑談APIです。なんでも語りかけてください。</h2>
<p><br><input type="text" id="msg_human"><input id="msg_set" type="button" value="送信"></p>
<div  class="balloon">
  <p id="msg_ai">......</p>
</div>
</body>
</html>
