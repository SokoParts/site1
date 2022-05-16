<html>
<head>
 <meta charset="utf-8">
<title>Сообщение с сайта</title>
</head>
<body>
<?php
//принимаем переменные с формы
$info = $_POST['info'];
$vin = $_POST['vin'];
$name = $_POST['name'];
$tel = $_POST['tel'];

//указываем email админа, куда будут отправляться сообщения
$admin_email = "sokoparts@gmail.com";

//функция обрезает пробелы с начала и конца
$name = trim($name);
$tel = trim($tel);

//отправляем сообщение с помощью функции mail администратору сайта 
if (mail($admin_email, $vin, $info, "From:" . $name)){
echo "Сообщение успешно отправлено";
} else {
echo "При отправке сообщения возникли ошибки";
}
echo "<br>Сейчас вы будете направлены на главную страницу сайта";
?>
<!--перенаправляем пользователя обратно на страницу сайта через 5 секунд-->
<script type="text/javascript">setTimeout('location.replace("http://sokoparts.beget.tech/")', 5000);</script>

</body>
</html>
