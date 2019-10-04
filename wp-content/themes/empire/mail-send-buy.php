<?php
if (isset($_POST['buy_name']) && isset($_POST['buy_email']) && isset($_POST['buy_phone'])) {
    $name = $_POST['buy_name'];
    $email = $_POST['buy_email'];
    $phone = $_POST['buy_phone'];
    $car = $_POST['buy_car'];;
    $to = $_POST['buy_admin_email'];
    $subject = $_POST['buy_title'];
    $message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от {$name}</h2>
        <p>Телефон: {$phone}</p>
        <p>Email: {$email}</p>
        <p>Машина: {$car}</p>  
        </body>
        </html>
    ";
    $headers = 'From: info@acrnm.pro' . "\r\n" .
        'Reply-To: admin@app.com ' .  "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    mail($to, $subject, $message, $headers);
    header('Location: /spasibo-2');
}