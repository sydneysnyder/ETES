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
				<a href="./managetickets.html" style="margin-right:25px;"><img src="./view/images/manage.png" class="icon"></a>
				<a href="./search.html" style="margin-right:25px;"><img src="./view/images/search.png" class="icon"></a>
				<a href="./login.html" style="margin-right:25px;"><img src="./view/images/logout.png" class="icon"></a>
			</ul>
		</nav>
        </div>
        
<div class="jumbotron text-center search" style = "background-color: white;margin-left:20px;margin-right:20px;margin-bottom:20px;">
						
			<div id="content">
				<br />
				<form method="GET">
					<div class = "row" style:"margin:10px;">
  <div class="col-lg-4">
    <div class="input-group" style:"margin-left:20px;">
      <input type="text" name="name" id="name" class="form-control" style="font-size:20px;height: 45px;"placeholder="Search Tickets by Event">
      	<div class="input-group-btn">
        		<button type="button" value="submit" class="btn btn-default" title="Search" style="font-size:20px;height: 45px;"><span class="glyphicon glyphicon-search"></span></button>
        		</div><!--row-->
        		</div><!--col-lg-4-->
        	</div><!--inputgroup-->
        </div><!--input group button-->
        <br />
                    <?php

                    include_once("php/connect_db.php");
                    
                    if(isset($_GET['name']))
                    {
                        $search = "%" . $_GET['name'] . "%";
                        $stmt = $database->prepare("SELECT * FROM event WHERE name LIKE :name ORDER BY name ASC");
                        $stmt->execute(array('name' => $search));
                    }
                    else
                    {
                        $stmt = $database->prepare('SELECT * FROM event ORDER BY name ASC');
                        $stmt->execute();
                    }
                    ?>

				</form>
 				<div id="results">
         				 <br />
         				 <h style="font-size:36px;">Search Results</h>
				<hr />
     	 				 <br />
					<?php
					
					while($row = $stmt->fetch()) {
						echo ' <div class = "col-md-2"><div class="boxed" align = "center" style="border: 2px solid #F00; 
	border-radius: 5px;	
	background-color: white;"><img src="./view/images/golden1center.jpg" width = 150px height = 100px ><br /><p1>' . $row['name'] .
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