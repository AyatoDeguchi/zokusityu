/*window.onload=function(){
  document.getElementById('btn_s').addEventListener('click',btn_con_s);
  document.getElementById('btn_tsu').addEventListener('click',btn_con_tsu);
  document.getElementById('btn_s').addEventListener('click',btn_con_imo);
}
*/
var content = document.getElementById('content');
var type;
var text;
//音声認識APIの使用
var speech = new webkitSpeechRecognition();

//言語を日本語に設定
speech.lang = "ja";

//ボタンクリックで認識開始
function btn_con_s(){
  type = 0;
  speech.start();
}
//ボタンクリックで認識開始
function btn_con_tsu(){
  type = 1;
  speech.start();
}
//ボタンクリックで認識開始
function btn_con_imo(){
  type = 2;
  speech.start();
}

//認識されたテキストを使って処理を分岐
speech.addEventListener('result', function(e) {
  console.log(e);
  text = e.results[0][0].transcript;
  getTextContents(text);
  document.getElementById("talkapi__request").click();
});

//テキスト表示
function getTextContents(text) {
  sourcetext.innerHTML = text;
  $('.target').val(text);
}
