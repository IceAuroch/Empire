<?php
if (isset($_POST['test_name']) && isset($_POST['test_phone'])) {
    $name = $_POST['test_name'];
    $phone = $_POST['test_phone'];
    $car = $_POST['test_car'];
    $to = $_POST['test_admin_email'];
    $subject = $_POST['test_title'];
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
        'Reply-To: admin@app.com ' .  "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    mail($to, $subject, $message, $headers);
    header('Location: /spasibo-2');
}