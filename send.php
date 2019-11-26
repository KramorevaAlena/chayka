<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;

if (mail("kramoreva.chayka@gmail.com", "Заявка с сайта", "ФИО: ".$fio."\r\nE-mail: ".$email,"From: ekaterina@marzoevaekaterina.ru \r\n"))
 { echo "<script> 
alert(\"Сообщение успешно отправлено\");
</script>";
header("refresh:0; url=http://marzoevaekaterina.ru");
 } else {
    echo "При отправке сообщения возникли ошибки";
}