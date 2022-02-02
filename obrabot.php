<meta charset="utf-8">
<title>Отправление заказа</title>
<?php
$urok="Заказ электромонтажной работы";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы
if (isset($_POST['name1']))			{$name1			= $_POST['name1'];		if ($name1 == '')	{unset($name1);}}
if (isset($_POST['email1']))		{$email1		= $_POST['email1'];		if ($email1 == '')	{unset($email1);}}
if (isset($_POST['text']))			{$text			= $_POST['text'];		if ($text == '')	{unset($text);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// адрес почты куда придет письмо
$address="redstoun.mod@yandex.ru";
// текст письма
$note_text="Тема : $urok \r\nИмя : $name1 \r\n tel : $email1 \r\n Дополнительная информация : $text";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251");
// сообщение после отправки формы
echo "<p style='color: RoyalBlue;'>Уважаемый(ая) <b>$name1</b> Ваш заказ на выполнение электромонтажной работы отправлен. <br /> Вам скоро перезвонят на ваш номер телефона <b> $email1</b>.</p>";
} else {
  echo "Ошибка отправления заказа, позже попробуйте ещё раз";
}

?>

<a href="zakaz.php">Вернутся назад</a>
<br />
<br />
<a href="index.php">Вернутся на Главную</a>
