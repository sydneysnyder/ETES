<?php session_start() ?>
<!DOCTYPE html>

<html>
	<head>
		<title>Tickets</title>
	</head>
	<body>	
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
						</tr>
					</thead>
					<?php
					while($row = $sql->fetch()) 
                    {
						echo '<tr><td>'  . $row['seat'] .
							 '</td><td>' . $row['price'] .
                             '</td><td>' . $row['available'] .
                             '</td><td>' . $row['etes_commission'] .
							 '</td></tr>';
					}
					?>
			    </table>
			</div>
	</body>
</html>