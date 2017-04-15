<?php
 
$strAccessToken = "DkTH9qphVYaX9f3rdGIGbaPHobTNaQjsh1B0hlwYLGGK1MnCaQqctpSbe1iJAiwm2ZwD8si7Ak6CMN8fkKJWjcybJ3XUCfbV+qQrAIzlFZv0x+z3ksuh7DEGgwa+Dbe/L6stKJSCBF9VkLYgBJFevwdB04t89/1O/w1cDnyilFU=";

include("lotto.php");
$rl = "รางวัลที่ 1 ".$tt[0]."\n"."เลขท้าย 2 ตัว ".$tt[1]."\n"."เลขหน้า 3 ตัว ".$tt[2]."\n"."เลขท้าย 3 ตัว ".$tt[3]."\n"."รางวัลข้างเคียงรางวัลที่ 1 ".$tt[4];

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";


$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
$jdata = "https://www.youtube.com/watch?v=Jt1h1MinlLI";
 
if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ครับ";
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันยังไม่มีชื่อนะ";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
}else if($arrJson['events'][0]['message']['text'] == "1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = $jdata;
  $arrPostData['messages'][1]['type'] = "sticker";
  $arrPostData['messages'][1]['packageId'] = "2";	
  $arrPostData['messages'][1]['stickerId'] = "34";		
}else if($arrJson['events'][0]['message']['text'] == "rv"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "video";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://krujunrmu.com/img/rv.mp4";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://krujunrmu.com/img/cvideo.jpg";	
  $arrPostData['messages'][1]['type'] = "sticker";
  $arrPostData['messages'][1]['packageId'] = "2";	
  $arrPostData['messages'][1]['stickerId'] = "34";	 	
}else if($arrJson['events'][0]['message']['text'] == "g1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "https://www.facebook.com/media/set/?set=oa.791372374351532&type=1";
  $arrPostData['messages'][1]['type'] = "sticker";
  $arrPostData['messages'][1]['packageId'] = "3";	
  $arrPostData['messages'][1]['stickerId'] = "184";	
}else if($arrJson['events'][0]['message']['text'] == "bank"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://krujunrmu.com/img/bank.jpg";
 $arrPostData['messages'][0]['previewImageUrl'] = "https://krujunrmu.com/img/bank.jpg";
}else if($arrJson['events'][0]['message']['text'] == "pro"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://krujunrmu.com/img/pro/1.jpg";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://krujunrmu.com/img/pro/1.jpg";
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = "https://krujunrmu.com/img/pro/2.jpg";
  $arrPostData['messages'][1]['previewImageUrl'] = "https://krujunrmu.com/img/pro/2.jpg";
  $arrPostData['messages'][2]['type'] = "image";
  $arrPostData['messages'][2]['originalContentUrl'] = "https://krujunrmu.com/img/pro/3.jpg";
  $arrPostData['messages'][2]['previewImageUrl'] = "https://krujunrmu.com/img/pro/3.jpg";	
  $arrPostData['messages'][3]['type'] = "image";
  $arrPostData['messages'][3]['originalContentUrl'] = "https://krujunrmu.com/img/pro/4.jpg";
  $arrPostData['messages'][3]['previewImageUrl'] = "https://krujunrmu.com/img/pro/4.jpg";
  $arrPostData['messages'][4]['type'] = "image";
  $arrPostData['messages'][4]['originalContentUrl'] = "https://krujunrmu.com/img/pro/5.jpg";
  $arrPostData['messages'][4]['previewImageUrl'] = "https://krujunrmu.com/img/pro/5.jpg";	

}else if($arrJson['events'][0]['message']['text'] == "mv"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "video";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://krujunrmu.com/img/ff.mp4";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://krujunrmu.com/img/ff.jpg";	
}else if($arrJson['events'][0]['message']['text'] == "หวย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = $rl;
}
/*else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
}*/

 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>