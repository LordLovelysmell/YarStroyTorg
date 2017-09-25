<?php
	$name = $_POST['name'];
	$number = $_POST['number'];
	
	$name = htmlspecialchars($name);
	$number = htmlspecialchars($number);

	$name = urldecode($name);
	$number = urldecode($number);

	$name = trim($name);
	$number = trim($number);

	if (mail("yarstroytorg@list.ru", "Заказ с сайта", "Имя: ".$name."; Номер телефона: ".$number ,"From: mail@yarstroitorg.ru \r\n"))
		{
	echo "Сообщение успешно отправлено";
		} else {
	echo "При отправке сообщения возникли ошибки";
	}
?>