<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ETES</title>
	
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/headerstyle.css">
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
			<?php
			include_once("php/connect_db.php");	

			$sql = $database->prepare("SELECT * FROM ticket ORDER BY seat ASC");
			$sql->execute();
			?>
						
			<div>
				<h1>Tickets</h1>
				<hr />
				<table border="1" cellpadding="5" style="border-collapse: collapse;border: 1px solid #888;margin: auto; width: 70%">
					<thead>
						<tr>
							<th>Seat</th>
							<th>Price</th>
							<th># Available</th>
							<th>ETES Commission</th> 
							<th>Purchase</th>                         
						</tr>
					</thead>
					<?php
					while($row = $sql->fetch()) 
                    {
						echo '<tr><td>'  . $row['seat'] .
							 '</td><td>' . $row['price'] .
                             '</td><td>' . $row['available'] .
                             '</td><td>' . $row['etes_commission'] .
							 '</td><td><a href="#" class="btn btn-default" type="buy" value="Buy Tickets" title="Buy Tickets"></tr>';
					}
					?>
			    </table>
			</div>
			</div>
			</div>
	</body>
</html>