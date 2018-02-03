<?php
//function 
function editMsg($chatID, $text, $messageID, $nmenu = false)
{
global $api;

if($nmenu)
{
$rm = array('inline_keyboard' => $nmenu
);
$rm = json_encode($rm);

}

$args = array(
'chat_id' => $chatID,
'text' => $text,
'message_id' => $messageID,
'parse_mode' => 'html',
);
if($nmenu) $args["reply_markup"] = $rm;
$r = new HttpRequest("post", "https://api.telegram.org/$api/editMessageText", $args);
$rr = $r->getResponse();
file_put_contents("logmy.json", "$rr");
$ar = json_decode($rr, true);
$ok = $ar["ok"]; //false
$e403 =$ar["error_code"];
if($e403 == "403"){
return false;
}elseif($e403){
return false;
}else{
return $ar["result"];
}
}ù
?>