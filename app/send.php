<?php 
    $to = $_SESSION['logged_user']->usmail; 
    $subject = "Проверка отправки писем"; 
    $message = "Здравствуйте
    Если вы читаете это письмо значит все ок
    Почтовый робот"; 
    $mailheaders = "Content-type:text/plain;charset=windows-1251rn"; 
    $mailheaders .= "From: SiteRobot <forkee@siterobot.ru>rn"; 
    $mailheaders .= "Reply-To: forkee@siterobot.rurn"; 
    mail($to, $subject, $message, $mailheaders);
?>