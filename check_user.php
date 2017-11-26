<?php

include ("auth.php");

if (($_POST["register"] == "OK") && (!$_POST["login"] || !$_POST["passwd"]))
{
		header('Location: index.php');
}
else
{
	if ($_POST["register"] == "OK" && $_POST['login'] && $_POST['passwd'])
	{
		if (auth($_POST['login'], $_POST['passwd'])){
			session_start();
		$_SESSION['loggued_on_user'] = $_POST['login'];
		header('Location: user.php');
	}
	else 
		header('Location: index.php');
	}
	else if ($_POST["register2"] == "Register")
		header('Location: register.php');
}

?>



