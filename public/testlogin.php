<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ETES</title>
	
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/headerstyle.css">
    <link rel="stylesheet" type="text/css" href="./css/landingstyle.css" />
	<link rel="stylesheet" type="text/css" href="./css/simplegrid.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container" id="con2">
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background:red;">
			<div class="navbar-header" style="float:left;">
				<a href="./index.html"><img src="./view/images/logo.png" class="Logo"></a>
			</div>
			<div style="float:right">
				<ul class="nav navbar-nav" style="float:right;">
				<a href="./testsearch.php" style="margin-right:25px;"><img src="./view/images/search.png" class="icon"></a>
				<a href="./logout.php" style="margin-right:25px;"><img src="./view/images/logout.png" class="icon"></a>
			</ul>
		</nav>
        </div>
        
<div class="jumbotron text-center search" style = "margin-left:20px;margin-right:20px;margin-bottom:20px;">
			<div id="content">
				<body align=center style="background-color:transparent;">
				<div class="grid grid-pad" style="background-color:transparent;">
    			<div class="col-8-12">
        	   	<img src= "./images/landinglogo.png" alt="company Logo" style="max-width:100%"/>
    			</div>
    			<div class="col-4-12">
				<?php
				if(!isset($_SESSION['id'])) {
				?>
				<form action="loginsuccess.php" method="post" class="form" id="post_form">
					        		<div class="form-group">
						<label for="email">Email</label>	
						<br />					   
						<input type="text" name="email" id="email" required/>
					</div>
        		<div class="form-group">
						<label for="password">Password</label>
						<br />						   
						<input type="password" name="password" id="password" required/>
					</div>
					<div class="form-group">
     			<div class="row">
            			<a href="./index.html" class="btn btn-danger" type="submit" value="Login" title="Login">Login
          				</a>
                        <a href="./testregister.php" class="btn btn-danger" type="create" value="Sign Up" title="Create Account">Create Account
         			</a>
            		</div>
				</form>
				}
				else {
					echo 'You are already logged in!';
				}
				?>
			</div>
		</div>
	</body>
</html>