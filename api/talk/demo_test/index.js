function mainClick(){
  document.getElementById("foot").style.display = "none";
}


window.addEventListener("load", function(){

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
  function con_s(){
    console.log('con_s');
    var text = document.getElementById("sourcetext").value;
    // 語尾を変換する処理を呼び出す
    var text = text + '。';
    var text = convert_S(text);
    document.getElementById("foot").style.display = "block";
    foot.innerHTML = '<div id="foot_left" style="padding:10px;background-color:#ffb0e3;"><p id="result" style="font-size:25px;"></p></div><img id="foot_right" style="width: 27.5%;" src="img/1024793.png" />';
    result.innerHTML = text;
    var synthes = new SpeechSynthesisUtterance(text);
    var voices = speechSynthesis.getVoices();
    voices.forEach(function(v, i){
        if(v.name == 'Microsoft Haruka Desktop - Japanese') synthes.voice = v;
    });
    synthes.rate = 1;
    synthes.volume = 2;
    speechSynthesis.speak( synthes );
  };

  //ツンデレ
  function con_tsu(){
    var text = document.getElementById("sourcetext").value;
    // 語尾を変換する処理を呼び出す
    //kara(text);
    var text = text + '。';
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

  //妹
  function con_imo(){
    var text = document.getElementById("sourcetext").value;
    // 語尾を変換する処理を呼び出す
    //kara(text);
    var text = text + '。';
    var text = convert_imo(text);
    document.getElementById("foot").style.display = "block";
    foot.innerHTML = '<div id="foot_left" style="padding:10px;background-color:#ffd085;"><p id="result" style="font-size:25px;"></p></div><img id="foot_right" style="width: 25%;" src="img/564196.png" />';
    result.innerHTML = text;
    var synthes = new SpeechSynthesisUtterance(text);
    var voices = speechSynthesis.getVoices();
    voices.forEach(function(v, i){
        if(v.name == 'Google 日本語') synthes.voice = v;
    });
    synthes.pitch = 1.1;
    speechSynthesis.speak( synthes );
  };
}, true);
