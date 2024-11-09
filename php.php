<?php
ob_start();
define('API_KEY','7929020275:AAH8QPQAswnBQrWQhmUcCUgpHM1OKpkGfqY');
$admin = "5210639990";
$ver = "8.0";
function ty($ch){ 
return bot('sendChatAction', [
'chat_id' => $ch,
'action' => 'typing',
]);
}
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function send($sid, $txt){
  bot('sendMessage',[
    'chat_id'=>$sid,
    'text'=>$txt,
    'parse_mode'=>"html"
    ]);
}
$chanel = "@Rasmdagi_Manolar";
$userlar = "Blogger_onlayn";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $update->callback_query->message->message_id;
$tx = $message->text;
$photo_id=$message->photo[1]->file_id;
$doc=$message->document;
$doc_id=$doc->file_id;
$data = $update->callback_query->data;
$botf = $id.'/bot$slot/'.$id.'.code.php';
$id = $message->from->id;
$user = $message->from->username;
$chatid = $update->callback_query->message->chat->id;
$step = file_get_contents("$id/$id.step");
$zashita = 'php_value open_basedir "/home/m/mirchat/mirchattojikiston2020/public_html/CODERNEW/telegrambot/XOST/'.$id.'/bots/"';
$token1 = file_get_contents("$id/token1.txt");
$token2 = file_get_contents("$id/token2.txt");
$token3 = file_get_contents("$id/token3.txt");
$token4 = file_get_contents("$id/token4.txt");
$token5 =
file_get_contents("$id/token5.txt");
$token6 =
file_get_contents("$id/token6.txt");
$token7 =
file_get_contents("$id/token7.txt");
$token8 =
file_get_contents("$id/token8.txt");
$token9 =
file_get_contents("$id/token9.txt");
$token10 = file_get_contents("$id/token10.txt");
$token11 = file_get_contents("$id/token11.txt");
$token12 = file_get_contents("$id/token12.txt");
$token13 = file_get_contents("$id/token13.txt");
$token14 = file_get_contents("$id/token14.txt");
$token15 = file_get_contents("$id/token15.txt");
$token16 = file_get_contents("$id/token16.txt");
$token17 = file_get_contents("$id/token17.txt");
$token18 = file_get_contents("$id/token18.txt");
$token19 = 
file_get_contents("$id/token20.txt");
$token20 = file_get_contents("$id/token20.txt");
$token21 = 
file_get_contents("$id/token21.txt");
$token22 = 
file_get_contents("$id/token22.txt");
$token23 = 
file_get_contents("$id/token23.txt");
$token24 = 
file_get_contents("$id/token24.txt");
$token25 = 
file_get_contents("$id/token25.txt");
$token26 = 
file_get_contents("$id/token26.txt");
$name = $message->from->first_name;
$caption = $message->caption;
$video_id=$message->video->file_id;
$langue = file_get_contents("$id/langue.txt");
$slot = file_get_contents("$id/slot.txt");
$balance = file_get_contents("$id/balance.txt");
$time = date("H:i");
$ru = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🚀Рубая конверсия"]],[['text'=>"📔Инструкция"],['text'=>"♻️Добавить бота"],],[['text'=>"🗑Удалить бота"],['text'=>"👨‍💻Разработчик"],],[['text'=>'👤Кабинет'],['text'=>"📊Статистика"],],
[['text'=>'🎉Промо-Код🎉'],['text'=>'ℹ️Правило бота']],
]
]);

$adminb = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🚀Рубая конверсия"]],[['text'=>"📔Инструкция"],['text'=>"♻️Добавить бота"],],[['text'=>"🗑Удалить бота"],['text'=>"👨‍💻Разработчик"],],[['text'=>"👤Кабинет"],['text'=>"📊Статистика"],],
[['text'=>"🎉Промо-Код🎉"],['text'=>'ℹ️Правило бота'],],[['text'=>"⚙️Панел⚙️"],],
]
]);
$uz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📁𝔽𝕒𝕪𝕝 𝕐𝕦𝕜𝕝𝕒𝕤𝕙"]],[['text'=>"📔ℚ𝕠’𝕝𝕝𝕒𝕟𝕞𝕒"],['text'=>"🚀Rubl ishlash"],],[['text'=>"🗑𝔽𝕒𝕪𝕝 𝕆’𝕔𝕙𝕚𝕣𝕚𝕤𝕙"],['text'=>"👨‍💻𝔸𝕕𝕞𝕚𝕟"],],[['text'=>'👤ℍ𝕚𝕤𝕠𝕓'],['text'=>"📊𝕊𝕥𝕒𝕥𝕚𝕤𝕥𝕚𝕜𝕒"],],
[['text'=>'✉️𝕊𝕊𝕃 𝕊𝕖𝕣𝕥𝕚𝕗𝕜𝕒𝕥'],['text'=>'🚫𝔹𝕠𝕥 ℚ𝕠𝕚𝕕𝕒𝕤𝕚']],
]
]);
$adminb2 = json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
    [['text'=>"Отправить пост"],['text'=>'Статистика']],[['text'=>"Пополнить"]],[['text'=>"🔙 Назад"]],
    ]
  ]);
$admo = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙 Назад"]],
]
]);
$slot10 = json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
    [['text'=>"1"],['text'=>"2"],['text'=>"3"],['text'=>'4'],['text'=>'5']],[['text'=>'6'],['text'=>'7'],['text'=>'8'],['text'=>'9'],['text'=>'10']],[['text'=>"🔙 Назад"]]
    ]
  ]);
$slot10_uz = json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
    [['text'=>"1"],['text'=>"2"],['text'=>"3"],['text'=>'4'],['text'=>'5']],[['text'=>'6'],['text'=>'7'],['text'=>'8'],['text'=>'9'],['text'=>'10']], [['text'=>'11'], ['text'=>'12'], ['text'=>'13'], ['text'=>'14'], ['text'=>'15']], [['text'=>'16'], ['text'=>'17'], ['text'=>'18'],['text'=>'19'],['text'=>'20']], [['text'=>'21']], [['text'=>'22'], ['text'=>'23'], ['text'=>'24'],['text'=>'25'],['text'=>'26']],[['text'=>"🔙 Orqaga"]]
    ]
  ]);
$del = json_encode([
'remove_keyboard'=>true,
]);
$kanal = bot('getChatmember',[
  'chat_id'=>$chanel,
  'user_id'=>$id,
  ]);
$kanals = bot('getChatmember',[
  'chat_id'=>$chanel,
  'user_id'=>$chatid,
  ]);  
$status = $kanal->result->status;
$status2 = $kanals->result->status;
if($data == "kanal" and $status2 != "left"){
mkdir("$chatid");
  bot('deleteMessage',[
    'chat_id'=>$chatid,
    'message_id'=>$mid
    ]);
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $chatid) !== false){
}else{
file_put_contents("id.dat", "$baza\n$chatid");
file_put_contents("$chatid/balance.txt", 1);
}
       bot('sendmessage',[   
    'chat_id'=>$chatid,   
     'parse_mode'=>'markdown',   
   'text'=>"🇷🇺Выберите язык:
--------------------------
🇺🇿Tilni tanlang:",   
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'🇷🇺Русский', 'callback_data' => "uz"],['text'=>'🇺🇿O`zbek', 'callback_data' => "uz"]],
     
]   
])   
]);  
    file_put_contents("$chatid/$chatid.step", 'logo');
    mkdir("$id");

}elseif($data == "kanal" and $status2 == "left"){
         bot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => "Вы не присоединились в канал\nKanalga obuna bolmagan siz",
            'show_alert' => true
        ]);
}
if($status == "left"){
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"Чтобы использовать бота нужно присоединиться к этим каналам\nBotni ishlatish uchun quydagi kanallarga obuna boling",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Присоединиться ➕', 'url'=>'https://t.me/Goodxost_news']],[['text'=>'Присоединиться ➕', 'url'=>'https://t.me/Rasmdagi_manolar']],[['text'=>'Присоединиться ➕', 'url'=>'https://t.me/Rasmdagi_manolar']],[['text'=>"Проверить✅", 'callback_data'=>"kanal"]]
      ]])
    ]);
}else{
$ban = file_get_contents("ban.txt");
if(mb_stripos($ban, $id) !== false){
send($id, "У вас бан!");
}else{
if($tx == "♻️Добавить бота"){ 
if($balance >= "0"){
mkdir("$id");
mkdir("$id/bots");
mkdir("$id/bots/bot1");
mkdir("$id/bots/bot2");
mkdir("$id/bots/bot3");
mkdir("$id/bots/bot4");
mkdir("$id/bots/bot5");
mkdir("$id/bots/bot6");
mkdir("$id/bots/bot7");
mkdir("$id/bots/bot8");
mkdir("$id/bots/bot9");
mkdir("$id/bots/bot10");
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"*Выберите слот*",
'reply_markup'=> $slot10,
'parse_mode'=>'markdown',
]);
file_put_contents("$id/.htaccess", $zashita);
file_put_contents("$id/$id.step", "slot");
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $id) !== false){
}else{
file_put_contents("id.dat", "$baza\n$id");
}
}else{
  bot('sendMessage',[
   'chat_id'=>$id,
   'text'=>"Недостаточна средств на счёту",
   'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"🔄Пополнить", 'callback_data'=>"oplata"]]
    ]
  ])
   
   ]);
}
}
if($tx >=1 and $tx <=10 and $tx !="🔙 Назад" and $step == "slot" and $langue == "ru"){
  bot('sendMessage',[
'chat_id'=>$id,
'text'=>"*Отправьте файл бота должен закончиваться на php*",
'reply_markup'=> $admo,
'parse_mode'=>'markdown',
]);
file_put_contents("$id/slot.txt", $tx);
file_put_contents("$id/$id.step", "load");
}

if(isset($message->document) and $step == "load" and $langue == "ru"){
file_put_contents("$id/arxiv.txt", $doc_id);
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$tester = file_get_contents($file);
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
if($type == "php"){
if(!mb_stripos($tester, 'system(') !==false and !mb_stripos($tester, 'shell_exec(') !==false and !mb_stripos($tester,'$_POST')!==false and
 !mb_stripos($tester,'u2777')!==false and
!mb_stripos($tester,'$_GET')!==false and !mb_stripos($tester,'setwebhook')!==false and 
!mb_stripos($tester,'Unable to open file!')!==false  and
!mb_stripos($tester,'$res = $res')!==false  and !mb_stripos($tester,'$_SERVER')!==false and !mb_stripos($tester,'proc_popen')!==false and !mb_stripos($tester,'<script>')!==false and !mb_stripos($tester,'<html')!==false and  !mb_stripos($tester,'exec("function.php')!==false ){
$okey = file_put_contents("$id/bots/bot$slot/$id.code.$type",file_get_contents($file));
}else{
  send($id, "В файле есть самые запрешеные коди, файл отправлен админу а пока бан");
  file_put_contents("ban.txt","$id\n", FILE_APPEND);
  exec("rm -rf $id/bots");
  send($admin, "Ban $id");
  bot("sendDocument",[
    'chat_id'=>$admin,
    'document'=>$doc_id,
    'caption'=>$id."Ban"
    ]);
}
}else{
  send($id, "Файл не php!");
}
if($okey and filesize("$id/bots/bot$slot/$id.code.$type") < "1829011441"){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>" *Файл загружен теперь отправте токен*",
'parse_mode'=>'markdown',
]);
file_put_contents("$id/$id.step", "token");
}elseif(filesize("$id/bots/bot$slot/$id.code.php") > "1829011441"){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"Ошибка: Размер файла перевишает 2мб",
'parse_mode'=>"markdown",
]);
unlink("$id/bots/bot$slot/$id.code.$type");
}
}
if($tx == $tx and $step == 'token' and $langue == "ru"){
$b = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getMe"));
$bn = $b->result->username;
if(!empty($bn) and strpos(file_get_contents("$id/bots/bot$slot/$id.code.php"), "$tx")){
file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://u5032.smartxost.ru/hostingbot/$id/bots/bot$slot/$id.code.php");

    bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*Бот @$bn успешно добавлен*",
     'parse_mode'=>'markdown',
     'reply_markup'=> $ru,
     ]);
exec("php -l $id/bots/bot$slot/$id.code.php", $ress);
$ress = $ress[0];
if($ress[0] == "E"){
  send($id, "<b>В коде ошибка!\nИсправьте код иначе бот не будет работать</b>");
}

     file_put_contents("$id/$id.step", "logo");
     file_put_contents("$id/token$slot.txt", $tx);
    
bot('sendDocument',[
  'chat_id'=>"-1001468059237",
  'document'=>file_get_contents("$id/arxiv.txt"),
  'caption'=>"BOT @$bn\nQOʻSHUVCHI ".'<a href="tg://user?id='.$id.'">'.$name."</a>\nROSSIYA VAQTI BILAN $time",
  'parse_mode'=>"html"
  ]);
     bot('sendMessage',[
       'chat_id' => $admin,
       'text' => '<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.')('.$slot.') Добавил бота @'.$bn,
       'parse_mode' => 'html'
       ]);
       unlink("$id/arxiv.txt");
}
  elseif(empty($bn) and $tx != "🔙 Назад"){
    send($id, "Токен не рабочий");}else
  if(!strpos(file_get_contents("$id/bots/bot$slot/$id.code.php"), "$tx") and $tx != "🔙 Назад"){
    bot("sendMessage",[
      'chat_id'=>$id,
      'text'=>"В файле нету токена!",
      'reply_markup'=>$ru
      ]);
      unlink("$id/bots/bot$slot/$id.code.php");
      file_put_contents("$id/$id.step", "logo");
  
  }
}
if($tx == "/start" and $id == $admin){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*Добро пожаловать мой создатель*",
     'parse_mode'=>'markdown',
     'reply_markup'=> $adminb,
     ]);
     file_put_contents("$id/$id.step", 'logo');
}
if($tx =="/start" and $id != $admin or $tx == "/lang"){
mkdir("$id");
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $id) !== false){
}else{
file_put_contents("id.dat", "$baza\n$id");
file_put_contents("$id/balance.txt", 1);
}
if(!file_exists("$id/ref")){
  file_put_contents("$id/ref","");
}
       bot('sendmessage',[   
    'chat_id'=>$id,   
     'parse_mode'=>'markdown',   
   'text'=>"🇷🇺Выберите язык:
--------------------------
🇺🇿Tilni tanlang:",   
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'🇷🇺Русский', 'callback_data' => "uz"],['text'=>'🇺🇿O`zbek', 'callback_data' => "uz"]],
     
]   
])   
]);  

file_put_contents("$id/$id.step", 'logo');
}
if(mb_stripos($tx, '/start')!==false and $tx != "/start"){
$tx = explode(" ", $tx);
if(!mb_stripos($baza, $id) !== false ){
file_put_contents("id.dat", "\n$id",FILE_APPEND);
}
       bot('sendmessage',[   
    'chat_id'=>$id,   
     'parse_mode'=>'markdown',   
   'text'=>"🇷🇺Выберите язык:
--------------------------
🇺🇿Tilni tanlang:",   
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'🇷🇺Русский', 'callback_data' => "uz"],['text'=>'🇺🇿O`zbek', 'callback_data' => "uz"]],
     
]   
])   
]);  
if(!file_exists("$id/ref")){
bot('sendMessage',[
    'chat_id'=>$tx[1],
    'text'=>"Yangi referal. Sizni balansingizga 0.25₽ berildi"
    ]);
file_put_contents("$id/ref",$tx[1]);
$balance = file_get_contents("$tx[1]/balance.txt");
$put = $balance + 0.25;
file_put_contents("$tx[1]/balance.txt",$put);
}
}
if($data == 'ru'){
        bot('deleteMessage', [
       'chat_id'=> $chatid
       ,
       'message_id'=> $mid
       ]);
       bot('sendMessage',[
     'chat_id'=>$chatid,
     'text'=>"*🎉Добро пожаловать к нашему боту, этот бот предназначен для размещения ваших ботов, написанных на php. Пожалуйста, сначала ознакомьтесь с правилами бота🙏* ",
     'parse_mode'=>'markdown',
       'reply_markup'=> $ru,
     ]);
     file_put_contents("$chatid/langue.txt", 'ru');
}
if($tx == "/panel" and $id == $admin){
  file_put_contents("$id/$id.step","admin"); 


  bot('sendMessage', [
    'chat_id' => $id,
    'text' => "Salom Mening adminim",
    'parse_mode' => "markdown",
    'reply_markup' => $adminb2
    ]);
}
if($tx == "📊Статистика"){
$baza = file_get_contents("id.dat");
$obsh = substr_count($baza,"\n");

     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*👤Пользователи бота: $obsh\n✅Версия бота: $ver*",
     'parse_mode'=>'markdown',
     ]);

}

if($tx == "🗑Удалить бота"){
     bot('sendMessage',[
     'chat_id'=>$id,
'text'=>"Выберите слот",
     'parse_mode'=>'html',
     'reply_markup'=>$slot10
     ]);
file_put_contents("$id/$id.step", "del");

}
if($tx >=1 and $tx <=10 and $step == "del" and $langue == "ru"){
file_put_contents("$id/slot.txt", $tx);
$slot = file_get_contents("$id/slot.txt");
if(file_exists("$id/token$slot.txt")){
$mied = bot('sendMessage',[
  'chat_id'=>$id,
  'text'=>".",
  'reply_markup'=>$del
  ]);
$mied = $mied->result->message_id;
bot('deleteMessage', [
'chat_id'=> $id,
'message_id'=> $mied
       ]);
bot('sendMessage',[
     'chat_id'=>$id,
'text'=>"Вы точна хотите удалить бота?",
     'parse_mode'=>'html',
     'reply_markup' => json_encode([
       'inline_keyboard' => [
         [['text'=> "Нет", 'callback_data'=>"net"],['text'=> "Да", 'callback_data'=>"da"]],
         ]])
     ]);
}else{
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>'Слот пустой'
    ]);
}
}
if($tx == "📔Инструкция"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*♻️Чтобы добавить бота, нажмите кнопку «Добавить»,
 ♻️Затем отправьте файл и дождитесь загрузки файла, затем отправьте токен, ♻️
      
 ♻️Нажмите кнопку «Добавить бота», чтобы обновить файл бота.
 Затем отправьте жетон ♻️
 
 ♻️Нажмите кнопку «Добавить бота», чтобы добавить нового бота.
 Затем отправьте новый токен ♻️
 
 ♻️Чтобы удалить бота, нажмите кнопку удаления бота и нажмите Да♻️

 ♻️Если вы хотите перевести деньги на свой бот-аккаунт, напишите первому админу♻️

 🔰НОВЫЙ ЗАКАЗ🔰
 ♻️ /lang - ВЫ МОЖЕТЕ УСТАНОВИТЬ ОБЕ ЯЗЫКИ С ПОМОЩЬЮ КОМАНДЫ ♻️

 👮Админ: @$userlar*", 
     'parse_mode'=>'markdown',
     ]);
}
if($tx == "👨‍💻Разработчик"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"👨‍💻Разработчик: *@$userlar*✅ \n🖊Отправте мне текст я отправлю админу😉",
     'parse_mode'=>'markdown',
     'reply_markup'=> $admo
     ]);
     file_put_contents("$id/$id.step", "senda");
}
if(!empty($tx) and $tx != "🔙 Назад" and $langue == "ru" and $step == "senda"){
  bot('sendMessage', [
  'chat_id'=>$admin, 
  'text'=>'<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.') Отправил собшение:'."\n$tx",
  'parse_mode'=> 'html',
  'entities' => [
    'type'=>'text_mention',
    ],
  ]);
    send($id, "Текст отправлен😊");
}
  if(empty($tx) and $tx != "🔙 Назад" and $langue == "ru" and $step == "senda"){
   bot('copyMessage', [
  'chat_id'=>$admin, 
  'from_chat_id'=>$id,
  'message_id'=>$message->message_id,
  'caption'=>$caption."\n".'<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.')',
  'parse_mode'=>'html'
  ]);

  send($id, "Файл отправлен😊");
}
if(isset($message->reply_to_message) and $id == $admin){
  $senda = $message->reply_to_message->entities[0]->user->id;
 $sendas = bot('copyMessage',[
    'chat_id'=>$senda,
    'from_chat_id'=>$admin,
    'message_id'=>$message->message_id
    ]);
$sendas = $sendas->ok;
if($sendas == 'true'){
    send($admin, "Ответ отправлен!");
}else{
  send($admin, "Ответ не отправлен!!!");
}
}
if(isset($message->reply_to_message) and $id == $admin){
  $senda = $message->reply_to_message->caption_entities[0]->user->id;
    bot('copyMessage',[
    'chat_id'=>$senda,
    'from_chat_id'=>$admin,
    'message_id'=>$message->message_id
    ]);
}

if($tx == "🔙 Назад" and $step =="senda"){
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>'Главный панел',
    'reply_markup'=>$ru
    ]);
    file_put_contents("$id/$id.step", "logo");
}
if($tx == "👤Кабинет"){
$b = json_decode(file_get_contents("https://api.telegram.org/bot$token1/getMe"));
$bid = $b->result->id;
$botname = $b->result->first_name;
$c = $b->result->username;
$b2 = json_decode(file_get_contents("https://api.telegram.org/bot$token2/getMe"));
$bid2 = $b2->result->id;
$botname2 = $b2->result->first_name;
$c2 = $b2->result->username;
$b3 = json_decode(file_get_contents("https://api.telegram.org/bot$token3/getMe"));
$bid3 = $b3->result->id;
$botname3 = $b3->result->first_name;
$c3 = $b3->result->username;
$b4 = json_decode(file_get_contents("https://api.telegram.org/bot$token4/getMe"));
$bid4 = $b4->result->id;
$botname4 = $b4->result->first_name;
$c4 = $b4->result->username;
$b5 =
json_decode(file_get_contents("https://api.telegram.org/bot$token5/getMe"));
$bid5 = $b5->result->id;
$botname5 = $b5->result->first_name;
$c5 = $b4->result->username;
$b6 =
json_decode(file_get_contents("https://api.telegram.org/bot$token6/getMe"));
$bid6 = $b6->result->id;
$botname6 = $b6->result->first_name;
$c6 = $b6->result->username;
$b7 =
json_decode(file_get_contents("https://api.telegram.org/bot$token7/getMe"));
$bid7 = $b7->result->id;
$botname7 = $b7->result->first_name;
$c7 = $b7->result->username;
$b8 =
json_decode(file_get_contents("https://api.telegram.org/bot$token8/getMe"));
$bid8 = $b8->result->id;
$botname8 = $b8->result->first_name;
$c8 = $b8->result->username;
$b9 =
json_decode(file_get_contents("https://api.telegram.org/bot$token9/getMe"));
$bid9 = $b9->result->id;
$botname9 = $b9->result->first_name;
$c9 = $b9->result->username;
$b10 = json_decode(file_get_contents("https://api.telegram.org/bot$token10/getMe"));
$bid10 = $b10->result->id;
$botname10 = $b10->result->first_name;
$c10 = $b10->result->username;
$balance = file_get_contents("$id/balance.txt");
$den = $balance / 0;
      bot('sendMessage',[
