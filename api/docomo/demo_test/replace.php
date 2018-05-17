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

function mainClick(){
  document.getElementById("foot").style.display = "none";
}


window.addEventListener("load", function(){
  var ele = document.getElementById("result");
  // Web Workersが使えるか調べる
  if (!window.Worker){
    ele.innerHTML = "Web Workersは使用できません";
    return;
  }

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
}, true);

  // 変換ボタン(語尾変換)がクリックされた時の処理

  //ツンデレ
function con_tsu(){
  var text = document.getElementById("source").value;
  // 語尾を変換する処理を呼び出す
  //kara(text);
  var text = text + '。';
  console.log(text);
  var text = convert_tsu(text);
  document.getElementById("foot").style.display = "block";
  foot.innerHTML = '<div id="foot_left" style="padding:10px;background-color:#8affff;"><p id="result" style="font-size:25px;"></p></div><img id="foot_right" style="width: 27.5%;" src="img/963534.png" />';
  result.innerHTML = text;
  var synthes = new SpeechSynthesisUtterance(text);
  var voices = speechSynthesis.getVoices();
  voices.forEach(function(v, i){
      if(v.name == 'Google 日本語') synthes.voice = v;
  });
  synthes.rate = 1.2;
  synthes.pitch = 1.05;
  speechSynthesis.speak( synthes );
};
</script>
