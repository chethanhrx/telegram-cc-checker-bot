<?php

$botToken = "6326707100:AAG7AkBXq18xP2RZD2I26S_UJ6VwcfeOt4k";
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents('php://input');
//echo $update;
$update = json_decode($update, TRUE);
//global $website;
$e = print_r($update);
$update["message"]["chat"]["title"]; 
$newusername     = $update["message"]["new_chat_member"]["username"];
$newgId          = $update["message"]["new_chat_member"]["id"];
$newfirstname    = $update["message"]["new_chat_member"]["first_name"];
$new_chat_member = $update["message"]["new_chat_member"];
$message         = $update["message"]["text"];
$message_id      = $update["message"]["message_id"];
$chatId          = $update["message"]["chat"]["id"];
$username2       = $update["message"]["from"]["username"];
$firstname       = $update["message"]["from"]["first_name"];
$cdata2          = $update["callback_query"]["data"];
$cchatid2        = $update["callback_query"]["message"]["chat"]["id"]; 
$username2       = $update["callback_query"]["from"]["username"];
$firstname2      = $update["callback_query"]["from"]["first_name"];
$userId2         = $update["callback_query"]["from"]["id"];
$cmessage_id2    = $update["callback_query"]["message"]["message_id"]; 
$username3       = ('@'.$username);
// $username3       = '@'.$username2;
 $info            = json_encode($update, JSON_PRETTY_PRINT); 
$emojid = '❌';
$emojil = '✅';
$owner = '<code>@badnoychx</code>';
$cofuid = '1212';
$cofuid2 = '1212';
$cofuid3 = '1212';
#FIN DE LA CAPTURA

$update = json_decode(file_get_contents("php://input"));

$chat_id = $update->message->chat->id;

$userId = $update->message->from->id;

$userIdd = $update->message->reply_to_message->from->id;

$firstnamee = $update->message->reply_to_message->from->first_name;

$firstname = $update->message->from->first_name;

$lastname = $update->message->from->last_name;

$username = $update->message->from->username;

$chattype = $update->message->chat->type;

$replytomessageis = $update->message->reply_to_message->text;

$replytomessagei = $update->message->reply_to_message->from->id;

$replytomessageiss = $update->message->reply_to_message;

$data = $update->callback_query->data;

$callbackfname = $update->callback_query->from->first_name;

$callbacklname = $update->callback_query->from->last_name;

$callbackusername = $update->callback_query->from->username;

$callbackchatid = $update->callback_query->message->chat->id;

$callbackuserid = $update->callback_query->message->reply_to_message->from->id;

$callbackmessageid = $update->callback_query->message->message_id;

$callbackfrom = $update->callback_query->from->id;

$callbackmessage = $update->callback_query->message->text;

$callbackid = $update->callback_query->id;
$videoUrl = "https://t.me/badboybotchecket/3";


$text = $update->message->text;
$owner = '<code>@badboychx</code>';
$dbhost = 'mysql-badboychx66.alwaysdata.net';
 $dbusername = '334704';
 $dbpass = '9972454365@hr';
 $database = 'badboychx66_bot';
 $con = mysqli_connect($dbhost,$dbusername,$dbpass,$database);
 if(!$con)
 {
 sendMessage2($My_ID,"database connection failed ❌",$message_id);
 }
 
           $sql = "SELECT * FROM `users` WHERE `teleid`='$userId'";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                  $credit = $row["credit"];
                  }
                  }
            $sql = "SELECT * FROM `users` WHERE `teleid`='$userId'";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                  $role = $row["role"];
              }      
                  }
                  

function decreaseCredit($uid)
{
global $con;
  $sql = "UPDATE users SET credit=credit-1 WHERE teleid='$uid'";
  $result = mysqli_query($con, $sql);
}

//=======inline keyboard========//
$keyboard = json_encode([
    'inline_keyboard' => [
        [
            ['text' => "♻️Owner ♻️", 'url' => "https://t.me/badboychx"],
            ['text' => "♻️BUY ♻️", 'url' => "https://t.me/badboychx"],
        ],
        
    ]
]);

//=======Inline Keyboard for "BACK" button========//

if ($cdata2 == "back") {
    // Go back to the welcome page
    $gatesText = "<b>
 • FOR EVRY CHECK YOU WILL LOSS 1 CREDIT
 • IF GATEWAY PROBLEM NO CREDIT LOSS
 • /redeem to REDEEM YOUR PREMIUM KEY

 Bot By ➳ @badboychx
</b>";


    $gatesKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => '🌿𝗣𝗥𝗘𝗠𝗜𝗨𝗠 🌿', 'callback_data' => 'premium'], ['text' => '♻️𝗙𝗥𝗘𝗘♻️ ', 'callback_data' => 'free']],
            [['text' => '𝗕𝗔𝗖𝗞 ⚠️', 'callback_data' => 'back2'], 
            ['text' => 'BOT INFORMATION', 'callback_data' => 'botinfo']
            ]
        ]
    ]);
    
    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}

//============GATES START===========//

if ($cdata2 == "gates") {
    $gatesText = "<b>
 • FOR EVRY CHECK YOU WILL LOSS 1 CREDIT
 • IF GATEWAY PROBLEM NO CREDIT LOSS
 • /redeem to REDEEM YOUR PREMIUM KEY
 
 Bot By ➳ @badboychx
</b>";

  
    $gatesKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => '🌿𝗣𝗥𝗘𝗠𝗜𝗨𝗠🌿 ', 'callback_data' => 'premium'], ['text' => '♻️𝗙𝗥𝗘𝗘 ♻️', 'callback_data' => 'free']],
            [['text' => '𝗕𝗔𝗖𝗞⚠️', 'callback_data' => 'back2'], ['text' => 'BOT INFORMATION', 'callback_data' => 'botinfo']]
        ]
    ]);

    

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}





//=========Back===========//

$premiumButton = json_encode([
    'inline_keyboard' => [
        [
            ['text' => '𝗣𝗥𝗘𝗠𝗜𝗨𝗠 🌿', 'callback_data' => 'premium'],
            ['text' => '𝗕𝗔𝗖𝗞 ⚠️ ', 'callback_data' => 'back']
        ],
        [
        ['text' => 'BOT INFORMATION', 'callback_data' => 'botinfo']
        ]
    ]
]);

if ($cdata2 == "free") {
    $freeText = "═════════════════
<b>[★] Striep Charged</b>
═════════════════
<b>[★] Formato :</b> <code>/au cc|mm|yy|cvv</code>
<b>[★] status : ✅</b>

<b>[★] Formato :</b> <code>/chk cc|mm|yy|cvv</code>
<b>[★] status : ✅</b>
═════════════════
<b>[★] Paypal Charged</b>
═════════════════
<b>[★] Formato :</b> <code>/pp cc|mm|yy|cvv</code>
<b>[★] status : [MAINTENANCE]</b>
═════════════════";

    // Replace this with your video URL
    

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumButton));
}


//========Premium and free=======//
$freeButton = json_encode([
    'inline_keyboard' => [
        [
            ['text' => '♻️𝗙𝗥𝗘𝗘 ♻️', 'callback_data' => 'free'],
            ['text' => '𝗕𝗔𝗖𝗞 ⚠️', 'callback_data' => 'back']
        ],
        [
        ['text' => 'BOT INFORMATION', 'callback_data' => 'botinfo']
        ]
    ]
]);

if ($cdata2 == "premium") {
   $premiumText = "═════════════════
<b>[★] Stripe Charged</b>
═════════════════
<b>[★] Formato :</b> <code>/au cc|mm|yy|cvv</code>
<b>[★] status : ✅</b>

<b>[★] Formato :</b> <code>/chk cc|mm|yy|cvv</code>
<b>[★] status : ✅</b>
═════════════════
<b>[★] Shopify  Charged</b>
═════════════════
<b>[★] Formato :</b> <code>/sh cc|mm|yy|cvv</code>
<b>[★] status : [MAINTENANCE]</b>

<b>[★] Formato :</b> <code>/p1 cc|mm|yy|cvv</code>
<b>[★] status : [MAINTENANCE]</b>

<b>[★] Formato :</b> <code>/sf cc|mm|yy|cvv</code>
<b>[★] status : [MAINTENANCE]</b>
═════════════════
<b>[★] Paypal Charged</b>
═════════════════
<b>[★] Formato :</b> <code>/pp cc|mm|yy|cvv</code>
<b>[★] status : [MAINTENANCE]</b>

<b>[★] Formato :</b> <code>/p1 cc|mm|yy|cvv</code>
<b>[★] status : [MAINTENANCE]</b>

<b>[★] Formato :</b> <code>/p2 cc|mm|yy|cvv</code>
<b>[★] status : [MAINTENANCE]</b>
═════════════════";

    // Replace this with your video URL
    

    $inputMediaVideo = json_encode([
        'type' => 'video', 
        'media' => $videoUrl,
        'caption' => $premiumText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($freeButton));
}


//=======Premium and free end=====//


//==============TOOLS===============//
$toolKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "🌿𝗚𝗔𝗧𝗘𝗦🌿", 'callback_data' => 'gates'], ['text' => "𝗕𝗔𝗖𝗞 ⚠️", 'callback_data' => 'back2']]
    ],
    [
    ['text' => 'BOT INFORMATION', 'callback_data' => 'botinfo']
    ]
]);



if ($cdata2 == "herr") {

  $toolcmds = "<b>
[🏔]  𝙏𝙤𝙤𝙡𝙨 𝙇𝙞𝙨𝙩 [🏔] 

------------------------------------------
[🏝] 𝗖𝗢𝗠𝗔𝗡𝗗𝗢: /gen
𝗙𝗼𝗿𝗺𝗮𝘁: 𝗰𝗰 | 𝗺| 𝘆 | 𝗰𝘃𝘃 
𝐒𝐭𝐚𝐭𝐮𝐬: ❌

[🏝]𝗖𝗢𝗠𝗔𝗡𝗗𝗢: /bin
𝗙𝗼𝗿𝗺𝗮𝘁: BIN|
𝐒𝐭𝐚𝐭𝐮𝐬: ✅

[🏝]𝗖𝗢𝗠𝗔𝗡𝗗𝗢: /rand
𝗙𝗼𝗿𝗺𝗮𝘁: US, CA, AU, ES, ETC
𝐒𝐭𝐚𝐭𝐮𝐬: ✅

[🏝]𝗖𝗢𝗠𝗔𝗡𝗗𝗢: /ask
𝗙𝗼𝗿𝗺𝗮𝘁: TO ASK CHAT GPT
𝐒𝐭𝐚𝐭𝐮𝐬: ✅

[🏝]𝗖𝗢𝗠𝗔𝗡𝗗𝗢: /url 
𝗙𝗼𝗿𝗺𝗮𝘁: SITE CHECKER
𝐒𝐭𝐚𝐭𝐮𝐬: ✅

[🏝]𝗖𝗢𝗠𝗔𝗡𝗗𝗢: /sk 
𝗙𝗼𝗿𝗺𝗮𝘁: SK CHECKER
𝐒𝐭𝐚𝐭𝐮𝐬: ✅

[🏝]𝗖𝗢𝗠𝗔𝗡𝗗𝗢: /pk
𝗙𝗼𝗿𝗺𝗮𝘁: PK CHECKER
𝐒𝐭𝐚𝐭𝐮𝐬: ✅

[🏝]𝗖𝗢𝗠𝗔𝗡𝗗𝗢: /proxy 
𝗙𝗼𝗿𝗺𝗮𝘁: TO SCRAPE PROXY
𝐒𝐭𝐚𝐭𝐮𝐬: ❌ [coming soon]
</b>";
  
    // Change this to your video URL
    

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $toolcmds,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($toolKeyboard));
}



//=============BOT INFO============//

if ($cdata2 == "botinfo") {

  $botinfo = "<b>
┏━━━━━━━━━━━━━━
┣ ☁️ 𝙈𝙮 𝙞𝙣𝙛𝙤𝙧𝙢𝙖𝙩𝙞𝙤𝙣 ☁️
┗━━━━━━━━━━━━━━
══════════════════════
[♻️] 𝑳𝒂𝒏𝒈𝒖𝒂𝒈𝒆  : PHP 8.1
[♻️] 𝑴𝒖𝒍𝒕𝒊 𝑻𝒉𝒓𝒆𝒂𝒅𝒆𝒅  : No
[♻️] 𝑨𝒔𝒚𝒏𝒄𝒉𝒓𝒐𝒏𝒐𝒖𝒔  : Yes
[♻️] 𝑫𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒓  : @badboychx
══════════════════════
</b>";
  
    // Change this to your video URL
    

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $botinfo,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($toolKeyboard));
}

//=============PRICE===============//
if ($cdata2 == "price") {
    $priceText = "<b>
     " . str_repeat(' ', 20) . "『 𝑷𝒓𝒊𝒄𝒆 💸』" . str_repeat(' ', 20) . "
°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
 • 100 credits🌿 ⇢ 2$
 • 300 credits🌿 ⇢ 4$
 • 500 credits🌿 ⇢ 7$
 • 1000 credits ⇢ 12$
°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
 •Dev ➳ <code>@badboychx</code></b>
";

    $priceKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => '♻️𝑯𝑶𝑴𝑬♻️', 'callback_data' => 'back2'], ['text' => '🌿𝑩𝑼𝒀🌿', 'url' => 'https://t.me/badboychx']],
            [
            ['text' => 'BOT INFORMATION', 'callback_data' => 'botinfo']
            ]
        ]
    ]);

    // Change this to your video URL
    

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $priceText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($priceKeyboard));
}



//=============PRICE END============//



//========information end=========//
$channel = json_encode([
    'inline_keyboard' => [
        [['text' => "🌿𝗚𝗿𝗼𝘂𝗽🌿 ", 'url' => "https://t.me/checkerscript_chat"], ['text' => "𝗖𝗵𝗮𝗻𝗻𝗲𝗹", 'url' => "https://t.me/ccChecker_scripts"]],
        [['text' => "🌿𝗕𝗔𝗖𝗞🌿 ", 'callback_data' => 'back2']],
        [
        ['text' => 'BOT INFORMATION', 'callback_data' => 'botinfo']
        ]
    ]
]);

if ($cdata2 == "channel") {
    $channelText = "<b>𝑱𝒐𝒊𝒏 𝒐𝒖𝒓 𝑶𝒇𝒇𝒊𝒄𝒊𝒂𝒍 𝑮𝒓𝒐𝒖𝒑 𝒂𝒏𝒅 𝑪𝒉𝒂𝒏𝒏𝒆𝒍</b>";
    
    // Change this to your video URL
    

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $channelText,
        'parse_mode' => 'HTML'
    ]);

file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($channel));
}



//==========back and close========//
if ($cdata2 == "back2") {
    $backtxt = ("<b>𝑾𝒆𝒍𝒄𝒐𝒎𝒆 𝒕𝒐 𝒎𝒚 𝒄𝒐𝒎𝒎𝒂𝒏𝒅 𝒔𝒆𝒄𝒕𝒊𝒐𝒏 $firstname
    
𝑬𝒙𝒑𝒍𝒐𝒓𝒆 𝒎𝒆 𝒎𝒐𝒓𝒆 𝒃𝒚 𝒄𝒍𝒊𝒄𝒌𝒊𝒏𝒈 𝒕𝒉𝒆 𝒃𝒖𝒕𝒕𝒐𝒏𝒔 𝒃𝒆𝒍𝒐𝒘</b>");
    
    // Change this to your video url
    $backVideoUrl = "https://t.me/badboybotchecket/3"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                ['text' => '🌿𝗚𝗔𝗧𝗘𝗦🌿', 'callback_data' => 'gates'],
                ['text' => '♻️𝗧𝗼𝗼𝗹𝘀♻️', 'callback_data' => 'herr'],
                ['text' => '🌿𝗣𝗿𝗶𝗰𝗲🌿 ', 'callback_data' => 'price'],
            ],
            [
                ['text' => '♻️𝗢𝗳𝗳𝗶𝗰𝗶𝗮𝗹 𝗚𝗿𝗼𝘂𝗽♻️ ', 'callback_data' => 'channel'],
                ['text' => 'BOT INFORMATION', 'callback_data' => 'botinfo']
            ],
        ]
    ]);

    $mediaArray = json_encode([
        'type' => 'video',
        'media' => $backVideoUrl,
        'caption' => $backtxt,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($mediaArray) . "&reply_markup=$keyboard2");
}


if (
    (strpos($message, '/info') === 0) ||
    (strpos($message, '.info') === 0) ||
    ((strpos($message, '/id') === 0) || (strpos($message, '!info') === 0)) ||
    ((strpos($message, '.id') === 0) || (strpos($message, '%info') === 0)) ||
    (strpos($message, '+info') === 0)
) {

    bot('sendMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "• User[NAME] » @$username
        
• User[ID] » <code>$userId</code>

• User[CHAT ID] » <code>$chat_id</code>

• Name[TG] » $firstname

• User[ROLE] »  $role

• User[CREDITS] »  $credit",
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'html'
    ]);
}
//========back and close end=======//

//=========functions started=========//

///=====Function Sendphoto======//
function sendPhotox($chatId, $photo, $caption, $keyboard = null) {
    global $website;
    $url = $website."/sendPhoto?chat_id=".$chatId."&photo=".$photo."&caption=".$caption."&parse_mode=HTML";
    
    if ($keyboard != null) {
        $url .= "&reply_markup=".$keyboard;
    }

    return file_get_contents($url);
}

///======function sendVideo========///
function sendVideox($chatId, $videoURL, $caption, $keyboard) {
    global $botToken;
    $url = "https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoURL&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard";
    file_get_contents($url);
}



function reply_tox($chatId,$message_id,$keyboard,$message) {
    global $website;
    $url = $website."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
    return file_get_contents($url);
}

function deleteM($chatId,$message_id){
    global $website;
    $url = $website."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
    file_get_contents($url);
}


function edit_message($chatId,$message,$message_id_1) {
  sendChatAction($chatId,"type");
   $url = $GLOBALS['website']."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$message_id."&parse_mode=HTML&disable_web_page_preview=True";
	file_get_contents($url);
}


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

function gibarray($message){
    return explode("\n", $message);
}

function sendMessage ($chatId, $message, $messageId){
  sendChatAction($chatId,"type");
$url = $GLOBALS['website']."/sendMessage?chat_id=".$chatId."&text=".$message."&parse_mode=html&disable_web_page_preview=True";
file_get_contents($url);
  
};
function delMessage ($chatId, $messageId){
$url = $GLOBALS['website']."/deleteMessage?chat_id=".$chatId."&message_id=".$messageId."";
file_get_contents($url);
};

function sendChatAction($chatId, $action)
{
  
$data = array("type" => "typing", "photo" => "upload_photo", "rcvideo" => "record_video", "video" => "upload_video", "rcvoice" => "record_voice", "voice" => "upload_voice", "doc" => "upload_document", "location" => "find_location", "rcvideonote" => "record_video_note", "uvideonote" => "upload_video_note");
$actiontype = $data["$action"];
$url = $GLOBALS['website']."/sendChatAction?chat_id=".$chatId."&action=".$actiontype."&parse_mode=HTML";
file_get_contents($url);
  
}

function answerCallbackQuery($data) {
    global $botToken; // Use the global bot token

    $url = "https://api.telegram.org/bot$botToken/answerCallbackQuery";

    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

}

function bot($method, $datas = [])
{
    global $botToken;
    $url = "https://api.telegram.org/bot" . $botToken . "/" . $method;

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($datas),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        // Manejar el error de cURL
        return false;
    } else {
        // Decodificar la respuesta
        $result = json_decode($response, true);

        if ($result['ok']) {
            // La solicitud fue exitosa
            return $result['result'];
        } else {
            // Manejar el error de la API de Telegram
            return false;
        }
    }
}

//=========Functions end===========//


foreach (glob("tools/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("function/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("gates/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("admin/*.php") as $filename)
{
    include $filename;
} 



//==========foreach end============//



?>

    