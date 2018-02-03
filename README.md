# Telegram-function-editMsg
this function can edit the message:
If you use the function for callback_data,do: if($message)
{
editMsg($chatid,"message",$cbmid);
} while if you use for edit a text: 
if($message)
{
editMsg($chatid,"message",$msgID);
}
