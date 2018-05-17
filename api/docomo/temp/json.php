<?php
include 'aiman.php';

$text = urldecode($_POST["msg"]);

$aiman = new aiman();

$msg["aiman"] = $aiman->ai_msg($text);
$msg["txt"] = $text;
$json = json_encode($msg);
echo $json;
?>
