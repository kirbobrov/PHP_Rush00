#!/usr/bin/php
<?php
if (!file_exists("private"))
	mkdir("private");
$prod = array();
$prod[0] = "Всего $1000";
$prod[1] = "Всего $700";
$prod[2] = "Всего $400";
$prod[3] = "Всего $15/час";
$i = 0;
$photo = array();
while ($prod[$i])
{
	$photo[$i] = "img/goods".($i + 1).".jpg";  /*.$prod[$i].".jpg";*/
	$i++;
}
$i = 0;
$name = array();
$name[0] = "Премиум раб";
$name[1] = "Базовый раб";
$name[2] = "Економ раб";
$name[3] = "Раб в почасовую оренду";
$desc = array();
$desc[0] = "Не пьющий не курящий, делает все, что угодно и даже больше...";
$desc[1] = "Стандартный набор функцый, если будете обижать, может и ударить...";
$desc[2] = "Много жрет, курит и ругаеться. Требует постоянного надзора. Без пинка ничего не делает.";
$desc[3] = "Оплата почасовая, работа зависит от колличества взятых часов... Нужно накормить и налить чашечку...";
while ($prod[$i])
{
	$tab[] = array("id" => $prod[$i], "name" => $name[$i], "desc" => $desc[$i], "photo" => $photo[$i]);
	$i++;
}
file_put_contents("private/products",serialize($tab));
$pass = hash('whirlpool', "fynjy32");
$login = "admin";
$order = array();
$tab[] = array("login" => $login, "passwd" => $pass, "order" => $order);
file_put_contents("private/passwd",serialize($tab));
?>
