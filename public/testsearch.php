<?php session_start() ?>
<!DOCTYPE html>

<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<div id="container">
			
				</form>
				<hr />
				<table border="1" cellpadding="5" style="border-collapse: collapse;border: 1px solid #888;margin: auto; width: 70%;">
					<thead>
						<tr>
							<th>ID</th>
						</tr>
					</thead>
					<?php
					
					while($row = $stmt->fetch()) {
							 '</td></tr>';
					}
					?>
				</table>
			</div>
		</div>
	</body>
</html>
