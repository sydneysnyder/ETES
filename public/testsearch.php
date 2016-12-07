<?php session_start() ?>
<!DOCTYPE html>

<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<div id="container">
			
			
					
			<div id="content">
				<h1>Events</h1>
				<hr />
				<form method="GET">
					Search events:
					<p>						
						<label for="name">Event</label>
						<input type="text" name="name" id="name" />
						<input type="submit" value="Submit" />
					</p>
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
				<hr />
				<table border="1" cellpadding="5" style="border-collapse: collapse;border: 1px solid #888;margin: auto; width: 70%;">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Description</th>
							<th>Time</th>
                            <th>Date</th>
						</tr>
					</thead>
					<?php
					
					while($row = $stmt->fetch()) {
						echo '<tr><td>' . $row['event_id'] .
							 '</td><td>' . $row['name'] .
							 '</td><td>' . $row['description'] .
							 '</td><td>' . $row['time'] .
							 '</td><td>' . $row['date'] .
							 '</td></tr>';
					}
					?>
				</table>
			</div>
		</div>
	</body>
</html>