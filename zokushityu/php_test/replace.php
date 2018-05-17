<script>

function convert(text){
  <?php
    include 'db_config.php';
    $characters_table = array();
    try
    {
       $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


       $stmt = $db->query("SELECT * FROM characters");
       $characters_table = $stmt->fetchAll(PDO::FETCH_ASSOC);

       $db = null;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     exit;
    }
    print_r($characters_table);
  ?>
  text = text.replace(/です/g,"じゃないんだから");
  return text;
}

// ワーカーで句読点と、語尾を変更する
window.addEventListener("load", function(){
  var ele = document.getElementById("result");
  // Web Workersが使えるか調べる
  if (!window.Worker){
    ele.innerHTML = "Web Workersは使用できません";
    return;
  }
  // 変換ボタン(語尾変換)がクリックされた時の処理
  document.getElementById("convert2").addEventListener("click", function(){
    var text = document.getElementById("sourcetext").value;
    // 語尾を変換する処理を呼び出す
    var text = convert(text);
    ele.innerHTML = text;
  }, true);
}, true);
</script>
