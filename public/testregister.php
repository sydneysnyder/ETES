<?php session_start(); 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ETES</title>
	
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/headerstyle.css">
    <link rel="stylesheet" type="text/css" href="./css/signupstyle.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>

<body align=center style:"background:white;">
<div class="container" id="con2">
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background:red;">
			<div class="navbar-header" style="float:left;">
				<a href="./index.html"><img src="./View/images/logo.png" class="Logo"></a>
			</div>
		</nav>
        </div>
        <div class="jumbotron text-center">
        <br />
        	<h style="font-size:32px;margin-top:40px;"><b> Join ETES </b></h>
		<div id="container" align=center>
				<?php
				if(!isset($_SESSION['id'])) {
				?>
					<form action="testregistered.php" method="post" class="form" id="post_form">
						<div class="row">
						<p class="col-md-4"></p>
						<p class="col-md-2" style="margin-right=10px;">
							<label for="fname">First Name</label>						   
							<input type="text" name="fname" id="fname" required/>
						</p>
						<p class="col-md-2">
							<label for="lname">Last Name</label>						   
							<input type="text" name="lname" id="lname" required/>
						</p>
						<br />
						</div>
						<p>
							<label for="birthdate">Date Of Birth</label>	
							<select name="yearOfBirth">
							<option value="">---Select year---</option>
							<?php for ($i = 1980; $i < date('Y'); $i++) : ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
							</select>
							<select name="monthOfBirth">
							<option value="">---Select month---</option>
							<?php for ($i = 1; $i <= 12; $i++) : ?>
							<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
							</select>
							<select name="dateOfBirth">
							<option value="">---Select date---</option>
							<?php for ($i = 1; $i <= 31; $i++) : ?>
							<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
							</select>					
						</p>
						<br />
                        <p>
							<label for="email">Email</label>						   
							<input type="text" name="email" id="email" required/>
						</p>
						<br />
						<p>
							<label for="password">Password</label>						   
							<input type="password" name="password" id="password" required/>
						</p>
						<br />
						<p>
							<label for="address">Address</label>						   
							<input type="address" name="address" id="address"/>
						</p>
						<br />
						<p>
							<label for="city">City</label>						   
							<input type="city" name="city" id="city" />
						</p>
						<br />
                        <p>
							<label for="zip">Zip Code</label>						   
							<input type="zip" name="zip" id="zip" />
						</p>
						<br />
						<p>
							<input type="submit" class="btn btn-danger" value="Submit" />
						</p>
					</form>
				<?php
				}
				else {
					echo 'You are logged in already';
				}
				?>
			</div>
		</div>
	</body>
</html>