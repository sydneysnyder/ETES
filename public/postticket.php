<?php session_start();
    
    include_once("php/connect_db.php");
    $sql = $database->prepare('SELECT * FROM event ORDER BY event_id ASC');
    $sql->execute();
?>


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

        <div>
            <h>Sell Tickets</h>
            <hr>
            <br />
            <?php
                if(isset($_SESSION['id'])) {
            ?>
            <form action = "postticketcomplete.php" method = "post" class = "post" form = "post_form">
                <p>
                    <label for = "price">Price<label>
                    <input type = "text" name = "price" id = "price" required/>
                </p>
                <br />
                <p>
                    <label for = "available">Number available<label>
                    <input type = "number" name = "available" id = "available" required/>
                </p>
                <br />
                <p>
                    <label for = "etes_commission">ETES commission (5%)<label>
                    <input type = "text" name = "etes_commission" id = "etes_commission" value = "1.00" required/>
                </p>
                <br />
                <p>
                    <label for = "seat">Seat No.<label>
                    <input type = "text" name = "seat" id = "seat" value = "AA11" required/>
                </p>
                <br />
                <p>
                    <label for = "event_id">Which event? (insert id, will fix later)<label>
                    <input type = "text" name = "event_id" id = "event_id" required/>
                </p>
                <br />
                <!--<p>
					<label for= "event_id">Event</label>
					<select name = "event_id">
						<?php
				        	while($row = $sql->fetch())
                            {
                                echo '<option value="' .$row['event_id']. '">' .$row['name']. '</option>';
						    }
						?>
					</select>
				</p><br />	-->
                <p>
                    <input class="btn btn-danger" type = "submit" value = "Sell Tickets" />
                </p>
                <br />
            </form>
            
            <?php }
				else{
					echo 'You must be logged in to post a ticket. <a href="testlogin.php">Log in here.</a>';
				}
					
			?>
        </div>
    </body>
</html>