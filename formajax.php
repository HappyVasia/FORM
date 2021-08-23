<?php
error_reporting(0);

$mytext = "\n\n Фамилия: ". $_POST["surname"].
		"\n Имя: ".$_POST["name"].
		"\n Страна визита: ".$_POST["country"].
		"\n Вид транспорта: ".$_POST["transport"].
		"\n Способ получения заказа: ".$_POST["send"][0].
									" ".$_POST["send"][1].
		"\n Соощение: ".$_POST["comment"];	
		
echo $mytext;

$myfile3 = fopen('fileajax.txt','a');
$add = fwrite($myfile3, $mytext);
//ftruncate($myfile3, 0);
fclose($myfile3);
?>