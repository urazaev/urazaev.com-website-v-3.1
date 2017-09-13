<?php
session_start();
if( isset($_POST['name']) && strtoupper($_POST['captcha']) == $_SESSION['captcha_id'] )
{
	$to = 'alexander@urazaev.com'; // Replace with your email	
	$subject = 'Заказ с сайта urazaev.com'; // Replace with your $subject
	$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];	
	
	$message = 'Имя: ' . $_POST['name'] . "\n" .
	           'Компания: ' . $_POST['company'] . "\n" .
	           'Услуги: ' . $_POST['developing'] . ',' . $_POST['promotion'] . ',' . $_POST['smm'] . "\n" .
	           'Контактный телефон: ' . $_POST['tel'] . "\n" .
	           'Email: ' . $_POST['email'] . "\n";
	
	mail($to, $subject, $message, $headers);	
	if( $_POST['copy'] == 'on' )
	{
		mail($_POST['email'], $subject, $message, $headers);
	}
}

echo $message;

?>