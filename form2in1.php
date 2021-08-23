<!DOCTYPE html>
<html>
   
<head>
<meta charset="utf-8">
<meta name=viewport content="width=600">
<link rel = "stylesheet" href = "form.css">
<style type ="text/css">
body{
	background:darkgray;
}
</style>
</head>
<body>


<?php
error_reporting(0);
if(isset($_POST["surname"]))
{
	?>

	<h1>Вы указали следующие сведения: </h1>
	
	<?php 
	
	echo"<br> Фамилия: ". $_POST["surname"].
		"<br> Имя: ".$_POST["name"].
		"<br> Страна визита: ".$_POST["country"].
		"<br> Вид транспорта: ".$_POST["transport"].
		"<br> Способ получения заказа: ".$_POST["send"][0].
									" ".$_POST["send"][1];
																	
}
else {
	?>
	<div class="myform">
	<h1> Для заказа билета заполните форму </h1>
	
<form method="post" action="form2in1.php">
<label>Введите Вашу фамилию<br><br>
<input type="text" name="surname"></label><br><br>
<label>Введите Ваше имя<br><br>
<input type="text" name="name"></label></br><br>
<label>Выберите страну визита<br><br>
<select name="country">
	<option value="Амстердам"> Амстердам </option>
	<option value="Берлин"> Берлин </option>
	<option value="Будапешт"> Будапешт </option>
	<option value="Каир"> Каир </option>
	<option value="Монако"> Монако </option>
	<option value="Париж"> Париж </option>
	<option value="Стамбул"> Стамбул </option>
	<option value="Хельсинки"> Хельсинки </option><select></label><br><br>
<label>Выберите желаемый вид транспорта<br><br>
<input type="radio" name="transport" value="самолёт">Самолёт<br>
<input type="radio" name="transport" value="поезд">Поезд</label><br><br>
<label>Куда Вы хотели бы получить номер Вашего заказа<br><br>
<input type="checkbox" name="send[]" value="смс">Смс<br>
<input type="checkbox" name="send[]" value="почта">Почта</label><br><br>
<label>Напишите нам о Ваших дополнительных пожеланиях<br><br>
<textarea name="comment" rows="2" cols="30"></textarea><br><br>
<input type="submit" name="submit" value="Отправить">
</form>
</div>

<?php
}

?>

</body>
</html>

<?php
$myfile2 = fopen('file2.txt','a');

$mytext = "\n\n Фамилия: ". $_POST["surname"].
		"\n Имя: ".$_POST["name"].
		"\n Страна визита: ".$_POST["country"].
		"\n Вид транспорта: ".$_POST["transport"].
		"\n Способ получения заказа: ".$_POST["send"][0].
									" ".$_POST["send"][1].
		"\n Соощение: ".$_POST["comment"];		

$add = fwrite($myfile2, $mytext);
//ftruncate($myfile2, 0);
fclose($myfile2);


?>

