<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];

	$to = "Tadayasu@yandex.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = "AllienWalker@mail.ru";
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name
    Телефон: $phone
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
