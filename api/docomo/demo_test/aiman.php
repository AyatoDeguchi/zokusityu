<?php
//ドコモ:雑談対話API

class aiman{
    var $apikey ="3862502e5a4d2f7134686a4d46716d475177314f446572774d6258714b387976472e554a696e3277454d44";
    //var $clientid ="g7DWpcP9H9cZ97nxSAb2nY8MOIxdKvwza94u2T9yGvAW"
    function ai_msg($text="おはよう"){

        $url = 'https://api.apigw.smt.docomo.ne.jp/dialogue/v1/dialogue?APIKEY='.$this->apikey;
        //$url = $url.'&CLIENT_ID='.$this->clientid;

        $headers = array(
            'Content-Type: application/json; charset=UTF-8',
        );
        $data = array(
            'utt' => $text
        );

        $options = array('http' => array(
            'method' => 'POST',
            'header' => implode("\r\n", $headers),
            'content' => json_encode($data)
        ));

        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $res = json_decode($response);

        return $res->utt;
    }

}
?>
