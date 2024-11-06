<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
	$mail = $_POST['mail'];
	$mesg = $_POST['msg'];

	$to = "Tadayasu@yandex.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = "AllienWalker@mail.ru";
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name
    Телефон: $phone
    Почта: $mail
    Сообщение: $mesg
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
