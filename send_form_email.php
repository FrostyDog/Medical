<?php
$name = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$country = $_POST['country'];
$formcontent="From: $name, $lastname, из $country \n Message: $message";
$recipient = "info@cryolight.group";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<script type='text/javascript'>alert('Спасибо! Ваше сообщение отправлено. Мы Вам ответим в ближайщие время!');
window.location.href='/';
</script>";
?>
