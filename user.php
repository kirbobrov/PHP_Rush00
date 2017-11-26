
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>shop</title>
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">People4Sale</a></h1>
		</div>
		<div id="form">
			Account 
		</div>
	</div>
	<div id="main">
		<div id="panel"></div>
		<div id="content">
			<div id="about">
				<h2>Details</h2>
				<p>ID: <?php session_start(); echo $_SESSION["loggued_on_user"]  ?>   <br>
				<form action="modif.php" method="post">
					Login <br> 
					<input type="text" name="login">
					<br>
					Old Password<br>
					<input type="password" name="oldpw">
					<br>
					New Password<br>
					<input type="password" name="newpw">
					<input type="submit" name="submit" value="Change Password">
					<button type="submit" name ="submit" value="delete" >Delete User</button> 
				</form>
			</div>
		</div>
	</div>
</body>
</html>
