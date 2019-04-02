<?php 

$recepient = "riziy_bes@gmail.com";
$sitename = "Juliya July - индивидуальные, семейные и love story фотосессии в Крыму и Севастополе";

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$date = trim($_POST['date']);
$time = trim($_POST['time']);
$photoset = trim($_POST['photoset']);
$message = "Имя: $name \nТелефон: $phone \nДата: $date \nВремя: $time \nФотосет: $photoset \n";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
 ?>