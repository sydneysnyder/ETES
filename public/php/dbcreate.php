<?php
    try{
        $con = new PDO("mysql:host=localhost; dbname=etes","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$fName =filter_input(INPUT_POST, "fname");
		$lName = filter_input(INPUT_POST, "lname");
		$phone = filter_input(INPUT_POST,"phone");
		$email = filter_input(INPUT_POST,"email");
		$birthdate = filter_input(INPUT_POST,"birthdate");
		$address = filter_input(INPUT_POST,"address");
		$city = filter_input(INPUT_POST,"city");
		$zip = filter_input(INPUT_POST,"zip");
		$password = filter_input(INPUT_POST,"password");
		$query;
        $ps;
        
		if($_POST["create"] <> ""){
        $query="INSERT INTO user(fname,lname,password,email,phone, 		  address,city,zip)VALUES('$fname','$lname','$password','$email','$phone', '$address', '$city', '$zip')";
        $ps = $con->prepare($query);

        $ps->bindParam(':fname',$fname);
        $ps->bindParam(':lname',$lname);
        $ps->bindParam(':password',$password);
        $ps->bindParam(':email',$email);
        $ps->bindParam(':phone',$phone);
		$ps->bindParam(':address',$address);
		$ps->bindParam(':city',$city);
		$ps->bindParam(':zip',$zip);

        $ps->execute();
		}
	}
	catch(PDOException $e){
		print "Error";
	}
	?>