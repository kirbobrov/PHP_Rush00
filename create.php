<?php

if (!$dir)
{
	mkdir("../private");
	$dir = 1;
}

function login_exist($tab)
{
	foreach ($tab as $login)
	{
		foreach ($login as $log)
		{
			if ($log == $_POST['login'])
				return (2);
		}
	}
	return (0);
}

if ((!$_POST[login] || !$_POST[passwd]) && $_POST["register"] != "OK")
	header('Location: register.php');
else
{
	if ($_POST[passwd] == $_POST[confirmation])
	{
		$tab = unserialize(file_get_contents("private/passwd"));
		if (login_exist($tab) != 2)
		{
			$pass = hash('whirlpool', $_POST['passwd']);
			$login = $_POST['login'];
			$order = array();
			$tab[] = array("login" => $login, "passwd" => $pass, "order" => $order);
			file_put_contents("private/passwd",serialize($tab));
			header('Location: index.php');
		}
		else
			header('Location: register.php');
	}
	else
		header('Location: register.php');
}
?>
