<?php session_start();?>

<!DOCTYPE html>

<html>
	<head>
		<title>Registered!</title>
	</head>
	<body>
		<div id="container">
		
			<div id="content">
				<h1>Registered</h1>
				<hr />
				<?php
				include_once('php/connect_db.php');
				$query =
				"INSERT INTO user 
				(id, email, password, birthdate, fname, lname, 
				 role, address, city, zip) 
				VALUES (NULL, :email, :password, :birthdate, :fname, :lname,
						:role, :address, :city, :zip)";
				
				$yearOfBirth = $_POST['yearOfBirth'];
				$monthOfBirth = $_POST['monthOfBirth'];
				$dateOfBirth = $_POST['dateOfBirth'];
				
				if ($yearOfBirth != '' && $monthOfBirth != '' && $dateOfBirth != '') {
					$date = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
				}
				else {
					echo 'Date error, will not insert into database';
				}
				
				$stmt = $database->prepare($query);
				$stmt->execute(array('email' => $_POST['email'],
									 'password' => $_POST['password'],
									 'role' => $_POST['role'],
									 'fname' => $_POST['fname'],
									 'lname' => $_POST['lname'],
   									 'address' => $_POST['address'],
									 'city' => $_POST['city'],
                                     'zip' => $_POST['zip'],
									 'birthdate' => date($date)));
				?>
			</div>
		</div>
	</body>
</html>