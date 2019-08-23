<html>
<body>

<?php
if (isset($_REQUEST['name']))
  {
   $to="info@nvsassociates.com";
   $subject = "Website Enquiry Details";
   $name = $_POST['name']; 
   $phone = $_POST['phone'];
   $country = $_POST['country'];
   $email = $_POST['email'];
   $message = $_POST['message']; 
   $cont="

 	Name of the contact person			:		$name
	
	Contact number						: 		$phone
	
	Country of residence				:		$country

	Email ID							: 		$email
	
	Message :		
	
	$message";	



  mail($to, $subject, $cont, "From:".$email);

$from= '"Response from NVS & Associates" <info@nvsassociates.com>';

 if($email)
 {

 $msg = "Thanks for visiting our website www.nvsassociates.com <br /><br />  
 		 We have received your to enquiry, we will revert to you at the earliest.<br /><br /><br />
		 Regards,<br />
		 Customer Support";

 $subject = "Submission of Enquiry Form";

mail($email, $subject, $msg,"From: $from\n" . "MIME-Version: 1.0\n" .   "Content-type: text/html; charset=iso-8859-1");

?>

<script>

alert('Message has been Successfully Sent');
window.location.href="thanks.html";

</script>

<?



}

}



?>







 



