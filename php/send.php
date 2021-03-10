<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$phone = htmlspecialchars($phone);
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);

$name = trim($name);
$email = trim($email);
$phone = trim($phone);

if(isset($email) && $email == '' || isset($phone) && $phone == '' || isset($name) && $name == '')  {
 $message = "<html><head><title>Заявка с сайта Zasip.ru</title></head><body bgcolor='#feeffe'><ul><li>Имя: ".$name."</li><li>Телефон: ".$phone."</li><li>Email: ".$email."</li></ul></body></html>";
}
else {
    $message = "<html><head><title>Заявка с сайта Zasip.ru</title></head><body bgcolor='#feeffe'><ul><li>Имя: ".$name."</li><li>Телефон: ".$phone."</li><li>Email: ".$email."</li></ul></body></html>";
}

if (mail("godfri423@ro.ru", "Заявка с сайта zasip.ru",$message,"From: mail@zasip.ru \r\n" ."Content-type: text/html; charset=utf-8\r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}
?>