<?php session_start() ?>
<!DOCTYPE html>

<html>
	<head>
		<title>Events</title>
	</head>
	<body>	
			<?php		
			include_once("php/connect_db.php");	
            
            //selecting all events		
			$sql = $database->prepare("SELECT * FROM event ORDER BY date ASC");
			$sql->execute();
            //selecting only events in specific venue
            $sql2 = $database->prepare("SELECT * FROM event WHERE venue_id=:id");
            $sql2->execute(array("id" => $_GET['id']));
			?>
						
			<div>
				<h1>Events</h1>
				<hr />

				<table border="1" cellpadding="5" style="border-collapse: collapse;border: 1px solid #888;margin: auto; width: 70%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Date</th>
							<th>Time</th>
							<th>Description</th>                          
						</tr>
					</thead>
					<?php
					while($row = $sql2->fetch()) 
                    {
						echo '<tr><td>' . '<a href="tickets.php?id=' . $row['event_id'] . '">' . $row['name'] . '</a>' .
							 '</td><td>' . $row['date'] .
                             '</td><td>' . $row['time'] .
                             '</td><td>' . $row['description'] .
							 '</td></tr>';
					}
					?>
			    </table>
			</div>
	</body>
</html>