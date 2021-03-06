<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ETES</title>
	
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/headerstyle.css">
    <link rel="stylesheet" href="./CSS/signupstyle.css">
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
        
<div class="jumbotron text-center search" style = "background: white;margin-left:20px;margin-right:20px;margin-bottom:20px;">
        <div>
            <h>Your ticket has been posted.</h>
            <br />
            <a href="./testsearch.php">Return to Search Page</a>
            <hr>
            <?php
				include_once("php/connect_db.php");
				$query= "INSERT INTO ticket VALUES (NULL, :price, :available, :etes_commission, :seat, :user_id, :event_id)";
				$sql = $database->prepare($query);
				$sql->execute(array('price' => $_POST['price'],
									 'available' => $_POST['available'],
									 'etes_commission' => $_POST['etes_commission'],
									 'seat' => $_POST['seat'],
									 'user_id' => $_SESSION['id'], 
                                     'event_id' => $_POST['event_id']));
			?>
        </div>
        </div>
    </body>
</html>