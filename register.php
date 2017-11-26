<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Yummy</title>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<script>
		function confirm_del(){
			confirm("Sure?");
		}
	</script>
</head>
<body>
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">People4Sale</a></h1>
		</div>
		<div id="form">
			Registration
		</div>
	</div>
	<div id="main">
		<div id="panel"></div>
		<div id="content">
			<div id="about">
				<form action="create.php" method="POST">
					Login <br> 
					<input type="text" name="login" size="16">
					<br>
					Password<br>
					<input type="password" name="passwd" size="16">
					<br>
					Confirm Password<br>
					<input type="password" name="confirmation" size="16"><br>
					<input type="submit" value="OK"> <br><br>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
