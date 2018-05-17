<script>
<?php
  include 'db_config.php';
  $characters_table_S = array();
  $characters_table_tsu = array();
  $characters_table_imo = array();
  try
  {
     $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $db->query("SELECT * FROM characters_s");
     $characters_table_S = $stmt->fetchAll(PDO::FETCH_ASSOC);
     $stmt = $db->query("SELECT * FROM characters_tsu");
     $characters_table_tsu = $stmt->fetchAll(PDO::FETCH_ASSOC);
     $stmt = $db->query("SELECT * FROM characters_imo");
     $characters_table_imo = $stmt->fetchAll(PDO::FETCH_ASSOC);

     $db = null;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage();
   exit;
  }
?>

function OneChoice_S(click){
  click = "click_S";
  var ele = document.getElementById("status");
  return click;
}
// 「ツンデレ」ボタンがクリックされた時の処理
function OneChoice_tsu(click){
  click = "click_tsu";
  var ele = document.getElementById("status");
  return click;
}
// 「妹」ボタンがクリックされた時の処理
function OneChoice_imo(click){
  click = "click_imo";
  var ele = document.getElementById("status");
  return click;
}

function convert_S(text){
  <?php
    foreach ($characters_table_S as $r) {
      $original_text = $r['original_text'];
      $after_text = $r['after_text'];
      echo "text = text.replace(/{$original_text}/g,\"{$after_text}\");";
    }
  ?>
  return text;
}

function convert_tsu(text){
  <?php
    foreach ($characters_table_tsu as $r) {
      $original_text = $r['original_text'];
      $after_text = $r['after_text'];
      echo "text = text.replace(/{$original_text}/g,\"{$after_text}\");";
    }
  ?>
  return text;
}

function convert_imo(text){
  <?php
    foreach ($characters_table_imo as $r) {
      $original_text = $r['original_text'];
      $after_text = $r['after_text'];
      echo "text = text.replace(/{$original_text}/g,\"{$after_text}\");";
    }
  ?>
  return text;
}

function TwoChoice_S(after_text){
  after_text = 'あら、また私を選んだの？懲りない豚ね。';
  return after_text;
}

function TwoChoice_tsu(after_text){
  after_text = 'えっ、またアタシ？べ、別に嬉しくなんてないわよ！ばかっ！';
  return after_text;
}

function TwoChoice_imo(after_text){
  after_text = 'またわたしを選んだんだね、お兄ちゃん！すっごい嬉しい、ありがとーっ！';
  return after_text;
}

function mainClick(){
  document.getElementById("foot").style.display = "none";
}


window.addEventListener("load", function(){
  var click;
  var after_text;
  var AfterText_voice;

  //↓バグの文
  var test = '属シチュ';
  var synthes = new SpeechSynthesisUtterance(test);
  var voices = speechSynthesis.getVoices();
  voices.forEach(function(v, i){
      if(v.name == 'Google 日本語') synthes.voice = v;
  });
  synthes.volume = 0;
  synthes.rate = 6;
  speechSynthesis.speak( synthes );


  // 変換ボタン(語尾変換)がクリックされた時の処理
  //ドS
  document.getElementById("convert_S").addEventListener("click", function(){
    //var text = document.getElementById("talkapi__reply").value;
    console.log(text_api);
    // 語尾を変換する処理を呼び出す
    var text = text_api + '。';
    var text = convert_S(text);
    if(click == "click_S"){
      after_text = TwoChoice_S();
      AfterText_voice = 'あら。またわたしをえらんだの？こりないぶたね。';
    }
    document.getElementById("foot").style.display = "block";
    foot.innerHTML = '<div id="foot_left" style="padding:10px;background-color:#ffb0e3;"><p id="result" style="font-size:25px;"></p></div><img id="foot_right" style="max-width: 27.5%;max-height: 545px;" src="img/1024793.png" />';
    if(click == "click_S"){
      result.innerHTML = text + '<br>' + after_text;
      text = text + AfterText_voice;
    }
    else {
      result.innerHTML = text;
    }
    var synthes = new SpeechSynthesisUtterance(text);
    var voices = speechSynthesis.getVoices();
    voices.forEach(function(v, i){
        if(v.name == 'Microsoft Haruka Desktop - Japanese') synthes.voice = v;
    });
    synthes.rate = 1;
    synthes.volume = 2;
    speechSynthesis.speak( synthes );
    click = OneChoice_S();
  }, true);

  //ツンデレ
  document.getElementById("convert_tsu").addEventListener("click", function(){
    //var text = document.getElementById("sourcetext").value;
    // 語尾を変換する処理を呼び出す
    //kara(text);
    var text = text_api + '。';
    var text = convert_tsu(text);
    if(click == "click_tsu"){
      after_text = TwoChoice_tsu();
      AfterText_voice = 'え。またアタシ？べ。べつに、うれしくなんてないわよ！ばか！';
    }
    document.getElementById("foot").style.display = "block";
    foot.innerHTML = '<div id="foot_left" style="padding:10px;background-color:#8affff;"><p id="result" style="font-size:25px;"></p></div><img id="foot_right" style="max-width: 27.5%;max-height: 545px;" src="img/963534.png" />';
    if(click == "click_tsu"){
      result.innerHTML = text + '<br>' + after_text;
      text = text + AfterText_voice;
    }
    else {
      result.innerHTML = text;
    }
    var synthes = new SpeechSynthesisUtterance(text);
    var voices = speechSynthesis.getVoices();
    voices.forEach(function(v, i){
        if(v.name == 'Google 日本語') synthes.voice = v;
    });
    synthes.volume = 0.8;
    synthes.rate = 1.2;
    speechSynthesis.speak( synthes );
    click = OneChoice_tsu();
  }, true);

  //妹
  document.getElementById("convert_imo").addEventListener("click", function(){
    //var text = document.getElementById("sourcetext").value;
    // 語尾を変換する処理を呼び出す
    //kara(text);
    var text = text_api + '。';
    var text = convert_imo(text);
    if(click == "click_imo"){
      after_text = TwoChoice_imo();
      AfterText_voice = 'また、わたしをえらんだんだね、おにいちゃん！すっごいうれしい、ありがとおお！';
    }
    document.getElementById("foot").style.display = "block";
    foot.innerHTML = '<div id="foot_left" style="padding:10px;background-color:#ffd085;"><p id="result" style="font-size:25px;"></p></div><img id="foot_right" style="max-width: 35%;max-height: 545px;" src="img/564196.png" />';
    if(click == "click_imo"){
      result.innerHTML = text + '<br>' + after_text;
      text = text + AfterText_voice;
    }
    else {
      result.innerHTML = text;
    }
    var synthes = new SpeechSynthesisUtterance(text);
    var voices = speechSynthesis.getVoices();
    voices.forEach(function(v, i){
        if(v.name == 'Google 日本語') synthes.voice = v;
    });
    synthes.pitch = 1.1;
    speechSynthesis.speak( synthes );
    click = OneChoice_imo();
  }, true);
  after_text = " ";
  AfterText_voice = " ";
}, true);
</script>
