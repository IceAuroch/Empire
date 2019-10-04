<?php
if (isset($_POST['name']) && isset($_POST['phone'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$car = isset($_POST['car']) ? $_POST['car'] : 'Форма без машины';
	$to = 'imperiumauto.com.ua@gmail.com';
	$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Форма заявки с лендинга Empire';
	$message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от {$name}</h2>
        <p>Телефон: {$phone}</p>
        <p>Машина: {$car}</p>  
        </body>
        </html>
    ";
	$headers = 'From: info@acrnm.pro' . "\r\n" .
			   'Reply-To: imperiumauto.com.ua@gmail.com ' .  "\r\n" .
			   'X-Mailer: PHP/' . phpversion();
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	mail($to, $subject, $message, $headers);
	header('Location: /spasibo');
}