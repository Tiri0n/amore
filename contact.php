<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    $to = 'owner@example.com';
    $subject = 'Сообщение с сайта Amore le Terrazze';
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
    @mail($to, $subject, $body);
    $success = true;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Спасибо!</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="contact-result">
<section class="thanks" style="padding:60px 20px;text-align:center;">
<?php if (!empty($success)): ?>
    <h2>Спасибо за ваше сообщение!</h2>
    <p>Мы свяжемся с вами в ближайшее время.</p>
<?php else: ?>
    <h2>Произошла ошибка</h2>
    <p>Попробуйте отправить форму ещё раз.</p>
<?php endif; ?>
    <a href="index.html" class="btn">Вернуться на сайт</a>
</section>
</body>
</html>
