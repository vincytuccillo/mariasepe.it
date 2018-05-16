	<?php	
			if(isset($_POST['submit'])){
				$to = "tuccillo.vincenzo1988@gmail.com"; // this is your Email address
				$from = $_POST['email']; // this is the sender's Email address
				$name = $_POST['name']; 
				$message = $name . " " . $from. " ha scritto:" . "\n\n" . $_POST['message'];
				$message2 = "Qui c'e' una copia del tuo messaggio " . $name . "\n\n" . $_POST['message'];
				$headers = "From:" . $from;
				$headers2 = "From:" . $to;
				mail($to,$message,$headers);
				mail($from,$message2,$headers2); // sends a copy of the message to the sender
			}
			?>
		