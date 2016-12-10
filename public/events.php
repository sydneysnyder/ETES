<?php session_start(); ?>


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
        
<div class="jumbotron text-center search" style = "background: white;margin-left:20px;margin-right:20px;margin-bottom:20px;">

			<?php		
			include_once("php/connect_db.php");	
            
            //selecting all events		
			$sql = $database->prepare("SELECT * FROM event ORDER BY date ASC");
			$sql->execute();
            //selecting only events in specific venue
            $sql2 = $database->prepare("SELECT * FROM event WHERE venue_id=:id");
            $sql2->execute(array("id" => $_GET['id']));
			?>
						
			<div id="results">
         				 <br />
         				 <h style="font-size:36px;">Events</h>
				<hr />
     	 				 <br />
					<?php
					while($row = $sql2->fetch()) 
                    {
						echo ' <div class = "col-md-2"><div class="boxed" align = "center" style="background-color: white; border: 2px solid #F00; border-radius: 5px;"><br /><img src="./view/images/golden1center.jpg" width = 150px height = 100px ><br /><p1>' . '<a href="tickets.php?id=' . $row['event_id'] . '">' . $row['name'] . '</a>' .
							  '</p1><br /><p1>' . $row['description'] .
							 '</p1><br /><p2>' . $row['date'] .
							 ' @ ' . $row['time'] .
							 '</p2></div></div>';
					}
					?>
			</div>
				</div>
			</div>
		</div>
	</body>
</html>