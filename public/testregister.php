<?php session_start(); ?>

<!DOCTYPE html>

<html>
	<head>
		<title>Register</title>
	</head>
	<body>
		<div id="container">
		
			<div id="content">
				<h1>Register</h1>
				<hr />
				<?php
				if(!isset($_SESSION['user_id'])) {
				?>
					<form action="testregistered.php" method="post" class="form" id="post_form">
						<p>
							<label for="fname">First Name</label>						   
							<input type="text" name="fname" id="fname" required/>
						</p>

						<p>
							<label for="lname">Last Name</label>						   
							<input type="text" name="lname" id="lname" required/>
						</p>
						<p>
							<label for="birthdate">Date Of Birth</label>	
							<select name="yearOfBirth">
							<option value="">---Select year---</option>
							<?php for ($i = 1980; $i < date('Y'); $i++) : ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
							</select>
							<select name="monthOfBirth">
							<option value="">---Select month---</option>
							<?php for ($i = 1; $i <= 12; $i++) : ?>
							<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
							</select>
							<select name="dateOfBirth">
							<option value="">---Select date---</option>
							<?php for ($i = 1; $i <= 31; $i++) : ?>
							<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
							</select>					
						</p>
                        <p>
							<label for="email">Email</label>						   
							<input type="text" name="email" id="email" required/>
						</p>
						<p>
							<label for="password">Password</label>						   
							<input type="password" name="password" id="password" required/>
						</p>

						<p>
							<label for="role">Role</label>						   
							<input type="role" name="role" id="role"/>
						</p>

						<p>
							<label for="address">Address</label>						   
							<input type="address" name="address" id="address"/>
						</p>

						<p>
							<label for="city">City</label>						   
							<input type="city" name="city" id="city" />
						</p>
                        <p>
							<label for="zip">Zip Code</label>						   
							<input type="zip" name="zip" id="zip" />
						</p>
						<p>
							<input type="submit" value="Submit" />
						</p>
					</form>
				<?php
				}
				else {
					echo 'You are logged in already';
				}
				?>
			</div>
		</div>
	</body>
</html>