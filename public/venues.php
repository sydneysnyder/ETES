<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ETES</title>
	
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/headerstyle.css">
    <link rel="stylesheet" type="text/css" href="./css/landingstyle.css" />
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
			$stmt = $database->prepare("SELECT * FROM venue ORDER BY name ASC");
			$stmt->execute();
			?>
						
			<div id="results">
         				 <br />
         				 <h style="font-size:36px;">Venues</h>
				<hr />
     	 				 <br />
					<?php
					while($row = $stmt->fetch()) {
						echo ' <div class = "col-md-2"><div class="boxed" align = "center" style="background-color: white;
						 border: 2px solid #F00; border-radius: 5px;"><br />
						<img src="./view/images/golden1center.jpg" width = 150px height = 100px ><br /><p1>
						' . '<a href="events.php?id=' . $row['venue_id'] . '">' . $row['name'] . '</a>' .
							 '</p1><p2>' . $row['address'] .
							 '</p2><div class="dropdown" >
  				<button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Ticket Options</span>
  					<span class="caret"></span></button>
  				      <ul class="dropdown-menu" role="menu">
    		    		 <li><a href="./tickets.php"><span class="glyphicon glyphicon-shopping-cart"></span> Buy Tickets</a></li>
    		    		 <li><a href="./postticket.php"><span class="glyphicon glyphicon-credit-card"></span> Sell Tickets</a></li>
  		              </ul>
	  </div></p> <!--dropdown-->
      <br /></div></div>';
					}
					?>
				</div>
				</div>
			</div>
	</body>
</html>