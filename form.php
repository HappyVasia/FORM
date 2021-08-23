<?php
error_reporting(0);

$surname = $_POST["surname"];
$name = $_POST["name"];
$age = $_POST["age"];
$country = $_POST["country"];
$send = $_POST["send"];
$comment = $_POST["comment"];

$mytext = "\n\n Фамилия: ".$surname."\n Имя: ".$name. 
"\n Возраст: ".$age."\n Страна: ".$country. 
"\n Сообщение: ".$send[0]." ".$send[1]."\n Комментарий: ".$comment;

echo $mytext;

$myfile = fopen('file.txt','a');
$add = fwrite($myfile, $mytext);
//ftruncate($myfile, 0);
fclose($myfile);

?>