<?php
	$question = $_POST['topic'];
   $name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$text = $_POST['text'];

	$to = "Tadayasu@yandex.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = "AllienWalker@mail.ru";
	$subject = "Заявка c сайта";

	
	$msg="
	Цель обращения: $question
   Имя: $name
   Контактный номер телефона: $phone
	Электронная почта: $email
	Адресс: $address
	Сообщение: $text
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
