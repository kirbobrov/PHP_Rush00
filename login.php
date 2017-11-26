<?PHP

include ("auth.php");

if ($_POST['login'] && $_POST['passwd'])
{
	if (auth($_POST['login'], $_POST['passwd'])){
		session_start();
		$_SESSION['loggued_on_user'] = $_POST['login'];
		return (3);
	}
	else{
		return (0);
	}
}
else 
{
	echo "<script>alert('You are not registrated, yet. Please sing up!'); window.location.replace('index.php');</script>";
	 return (0);
}

?>