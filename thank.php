<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$package = $_POST['paket'];
$time = $_POST['appt'];
$date = $_POST['dates'];

//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "946232137:AAF630TehVcNFfiQWhBam6wgJCgNdO3Ey_w";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "728771893";
 
$arr = array(
  'Услуга: ' => $package,
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Время: ' => $time,
  'Дата: ' => $date
);
 
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 $to = "stesyk2002@gmail.com";
 $message = 'Имя: ' .$name. "\n". 'Номер телефона: ' .$phone. "\n".'Время: ' .$time."\n". 'Дата: ' .$date;
mail($to,$package,$message);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Баня, Ровно</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <div id="thank">
    <h2>Спасибо, ваша заявка принята</h2>
    <h3>Мы свяжемся с вами в ближайшее время</h3>
  </div>
</body>
