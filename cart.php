<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

$i = $_POST['cart'];

if (!isset($_SESSION['basket']))
	$_SESSION['basket'] = array();

if (!isset($_SESSION['basket'][$i]))
{
	$_SESSION['basket'][$i] = array();
	$_SESSION['basket'][$i]['count'] = 1;
	$_SESSION['basket'][$i]['price'] = 500;
	$_SESSION['basket'][$i]['name'] = 'Надо вписать название';
}
else
	$_SESSION['basket'][$i]['count']++;

echo "<pre>";
print_r($_SESSION['basket']);
echo "</pre>";
header('Location: index.php');
/*
if (file_exists("private/cart"))
{
	
	$tab = unserialize(file_get_contents("private/products"));
	$cart_add[] = array("name" => $tab[$i]['name']);
	print_r($cart_add);
	$cart = array_merge($cart, $cart_add);
	file_put_contents("private/cart", serialize($cart));
}
else
{
	$cart = array();
	$tab = unserialize(file_get_contents("private/products"));
	//$i = ($_POST[cart]);
	$cart[] = array("name" => $tab[$i]['name']);
	print_r($cart);
	file_put_contents("private/cart", serialize($cart));
}
	header('Location: index.php');
*/
?>