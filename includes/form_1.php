<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['arrival_date']) && strlen($_POST['arrival_date']) == 0 || empty($_POST['departure_date']) && strlen($_POST['departure_date']) == 0 || empty($_POST['number_of_person']) && strlen($_POST['number_of_person']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$arrival_date = $_POST['arrival_date'];
	$departure_date = $_POST['departure_date'];
	$number_of_person = $_POST['number_of_person'];
	$textarea_291 = $_POST['textarea_291'];
	
	$to = 'nok@deeland-phayam.com, marzeev@me.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nArrival_Date: $arrival_date \nDeparture_Date: $departure_date \nNumber_Of_Person: $number_of_person \nTextarea_291: $textarea_291 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: nok@deeland-phayam.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>