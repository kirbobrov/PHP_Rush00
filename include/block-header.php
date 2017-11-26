<div id="block-header">
    <div id="header-top-block">
    	<ul id="header-top-menu">

    	<li><a href="index.php">Главная</a></li>
    	<li><a href="contacts.php">Контакты</a></li>
    	<li><a href="about.php">О нас</a></li>

   		</ul>
   		<div class="loggin">
   		<?php if (!$_SESSION['loggued_on_user']) : ?>
				<div id="form">
					<form id="form1" method="POST" action="check_user.php">
						<div id="log">
                    		<input type="text" name="login" placeholder="Login">
                   		 	<input type="password" name="passwd" placeholder="Password">
                  		  	<input class="button" type="submit" name="register" value="OK">
                  		  	<input id="reg" class="button" type="submit" name="register2" value="Register">
                		</div>
                		
            		</form>
				</div>
		<?php endif ?>
		<?php if ($_SESSION['loggued_on_user']) : ?>
				<div id="logout">
					<form  method="POST" action="logout.php">
						<input class="button" type="submit" name="disconnect" value="logout">
					</form>
				</div>
		<?php endif ?>
		</div>
	</div>
</div>








