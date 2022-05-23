<html>
<head>
 <meta charset="utf-8">
<title>Отправка письма</title>
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


//формируем тело сообщения
$mess="Имя: $name \nVIN: $vin \nТелефон: $tel \nСообщение: $info \nИнтересуется:\n $filtr";

//добавляем значения чекбоксов Фильтры
foreach($_POST['filtr'] as $value){
    $mess .= "$value \n";
  }
//добавляем значения чекбоксов Зажигания
foreach($_POST['zazig'] as $value){
    $mess .= "$value \n";
  }
//добавляем значения чекбоксов Тормозная система
foreach($_POST['tormoz'] as $value){
    $mess .= "$value \n";
  } 
//добавляем значения чекбоксов Ходовая
foreach($_POST['xodovay'] as $value){
    $mess .= "$value \n";
  } 

//добавляем значения чекбоксов ГРМ
foreach($_POST['GRM'] as $value){
    $mess .= "$value \n";
  } 
//добавляем значения чекбоксов Прокладки и сальники
foreach($_POST['prokl-sal'] as $value){
    $mess .= "$value \n";
  } 
  //добавляем значения чекбоксов Шрус
foreach($_POST['shrus'] as $value){
    $mess .= "$value \n";
  } 
    //добавляем значения чекбоксов Опоры
foreach($_POST['opori'] as $value){
    $mess .= "$value \n";
  } 
    //добавляем значения чекбоксов Система охлаждения 
foreach($_POST['sys-oxl'] as $value){
    $mess .= "$value \n";
  }  
    //добавляем значения чекбоксов Поршни
foreach($_POST['porshni'] as $value){
    $mess .= "$value \n";
  } 
      //добавляем значения чекбоксов Сцепления
foreach($_POST['sceplen'] as $value){
    $mess .= "$value \n";
  } 


//отправляем сообщение с помощью функции mail администратору сайта 
if (mail($admin_email, $name, $mess, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email")){
echo "Сообщение успешно отправлено";
} else {
echo "При отправке сообщения возникли ошибки";
}
echo "<p>Сейчас вы будете направлены на главную страницу сайта</p>";
?>
<!--перенаправляем пользователя обратно на страницу сайта через 5 секунд-->
<script type="text/javascript">setTimeout('location.replace("http://sokoparts.ru/")', 5000);</script>

</body>
</html>
