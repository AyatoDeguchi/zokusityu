var btn = document.getElementById('btn');
var content = document.getElementById('content');
var text;
//音声認識APIの使用
var speech = new webkitSpeechRecognition();

//言語を日本語に設定
speech.lang = "ja";

//ボタンクリックで認識開始
btn.addEventListener('click', function() {
  speech.start();
});

//認識されたテキストを使って処理を分岐
speech.addEventListener('result', function(e) {
  console.log(e);
  text = e.results[0][0].transcript;
  getTextContents(text);
});

//テキスト表示
function getTextContents(text) {
  sourcetext.innerHTML = text;
  //msg_human.innerHTML = text;
  $('.target').val(text);
  con();
}
//<input type="text" id="msg_human"><input id="msg_set" type="button" value="送信">
/*
<div class="check_boxcomtainer">
  <div class="check_box">
    <button id="msg_set" class="my-btn">話かける</button>
  </div>
</div>
*/
