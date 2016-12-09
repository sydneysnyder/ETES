<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Post Ticket
        </title>
    </head>
    <body>
        <div>
            You have successfully posted a ticket!
            <hr>
            <?php
				include_once("php/connect_db.php");
				$query= "INSERT INTO ticket VALUES (NULL, :price, :available, :etes_commission, :seat, :user_id, :event_id)";
				$sql = $database->prepare($query);
				$sql->execute(array('price' => $_POST['price'],
									 'available' => $_POST['available'],
									 'etes_commission' => $_POST['etes_commission'],
									 'seat' => $_POST['seat'],
									 'user_id' => $_SESSION['id'],
									 'event_id' => $_POST['event_id']));
			?>
        </div>
    </body>
</html>