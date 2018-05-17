/* HTML(だけ)の読み込みが完了したら */
window.addEventListener('DOMContentLoaded',()=>{
    document.getElementById('talkapi__request').addEventListener('click',handler_request_reply);
});

var text_api;

function handler_request_reply(ev){
    /* コメント取得 */
    const comment = document.getElementById('talkapi__input').value;
    /* レクエストデータ */
    let formdata = new FormData();
    //- apikeyパラメーター
    formdata.append('apikey','yVC3yyxZV48p1c083UUnRkJmA7gQnjsT');
    //- コメント
    formdata.append('query',comment);

    /* リクエスト */
    fetch('https://api.a3rt.recruit-tech.co.jp/talk/v1/smalltalk',{
        method: 'post',
        body: formdata,

    }).then(response => {
        //- レスポンス取得
        response.json().then(data => {
            //- 返答取得
            const reply = data.results[0].reply;
            //- 出力
            document.getElementById('talkapi__reply').innerHTML = reply;
            text_api = reply;
            console.log(text_api);
            console.log(type);
            switch (type) {
              case 0: document.getElementById("convert_S").click(); break;
              case 1: document.getElementById("convert_tsu").click(); break;
              case 2: document.getElementById("convert_imo").click(); break;
              default : console.log(エラー); break;
            }
        });
    });

}
