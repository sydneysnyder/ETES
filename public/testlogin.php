<?php session_start(); ?>

<!DOCTYPE html>

<html>
	<head>
		<title>Login</title>
	</head>
	<body>
			<h1>Login</h1>
			<hr />
			<?php
			if(!isset($_SESSION['id'])) {
			?>
			<form action="loginsuccess.php" method="post" class="form" id="post_form">
				<p>
					<label for="email">Email</label>						   
					<input type="text" name="email" id="email" required/>
				</p>
				<p>
					<label for="password">Password</label>						   
					<input type="password" name="password" id="password" required/>
				</p>
				<p>
					<input type="submit" value="Submit" />
				</p>
			</form>
			<a href="testregister.php">Or sign up here</a>
			<?php
			}
			else {
				echo 'You are logged in already';
			}
			?>
	</body>
</html>