<?php session_start() ?>
<!DOCTYPE html>

<html>
	<head>
		<title>Venues</title>
	</head>
	<body>	
			<?php
			
			include_once("php/connect_db.php");			
			$stmt = $database->prepare("SELECT * FROM venue ORDER BY name ASC");
			$stmt->execute();
			?>
						
			<div>
				<h1>Venues</h1>
				<hr />
				<table border="1" cellpadding="5" style="border-collapse: collapse;border: 1px solid #888;margin: auto; width: 70%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					<?php
					while($row = $stmt->fetch()) {
						echo '<tr><td>' . '<a href="events.php?id=' . $row['venue_id'] . '">' . $row['name'] . '</a>' .
							 '</td><td>' . $row['address'] .
							 '</td></tr>';
					}
					?>
				</table>
			</div>
	</body>
</html>