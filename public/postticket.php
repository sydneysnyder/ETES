<?php session_start();
    
    include_once("php/connect_db.php");
    $sql = $database->prepare('SELECT * FROM event ORDER BY event_id ASC');
    $sql->execute();
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
            Post a ticket for sale
            <hr>
            <?php
                if(isset($_SESSION['id'])) {
            ?>
            <form action = "postticketcomplete.php" method = "post" class = "post" form = "post_form">
                <p>
                    <label for = "price">Price<label>
                    <input type = "text" name = "price" id = "price" required/>
                </p>
                <p>
                    <label for = "available">Number available<label>
                    <input type = "number" name = "available" id = "available" required/>
                </p>
                <p>
                    <label for = "etes_commission">ETES commission (5%)<label>
                    <input type = "text" name = "etes_commission" id = "etes_commission" value = "1.00" required/>
                </p>
                <p>
                    <label for = "seat">Seat No.<label>
                    <input type = "text" name = "seat" id = "seat" value = "AA11" required/>
                </p>
                <p>
                    <label for = "event_id">Which event? (insert id, will fix later)<label>
                    <input type = "text" name = "event_id" id = "event_id" required/>
                </p>
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
				</p>	-->
                <p>
                    <input type = "submit" value = "Submit" />
                </p>
            </form>
            
            <?php }
				else{
					echo 'You must be logged in to post a ticket. <a href="testlogin.php">Log in here.</a>';
				}
					
			?>
        </div>
    </body>
</html>