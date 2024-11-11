<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'php-mailer-master/src/PHPMailer.php';
	require 'php-mailer-master/src/Exception.php';
	require 'path/to/PHPMailer/src/SMTP.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTD-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	//От кого
	$mail->setFrom('Yukino23@yandex.ru', 'Обратная связь для родителей');
	//Кому
	$mail->addAddress('Tadayasu@yandex.ru');
	//Тема
	$mail->Subject = 'Обратная связь для родителей';

	//Тело письма
	$body = '<h1>Встречайте супер письмо!<h1>';

	$body = '<p><strong>Тема обращения:</strong> '.$_POST['topic'].'</p>';
	if(trim(!empty($_POST['name']))){
		$body = '<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	}
	if(trim(!empty($_POST['phone']))){
		$body = '<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
	}
	if(trim(!empty($_POST['email']))){
		$body = '<p><strong>Электронный адресс:</strong> '.$_POST['email'].'</p>';
	}
	if(trim(!empty($_POST['address']))){
		$body = '<p><strong>Адресс:</strong> '.$_POST['address'].'</p>';
	}
	if(trim(!empty($_POST['text']))){
		$body = '<p><strong>Сообщение:</strong> '.$_POST['text'].'</p>';
	}

	$mail->Body = $body;

	//Отправка
	if (!$mail->send()) {
		$message = 'Ошибка';
	} else
 {
	$message = 'Данные отправлены';
 }

 $response = [
	'message' => $message
 ];

 header('Content-type: application/json');
 echo json_encode($response);
?>

<p>Привет, форма отправлена</p>
