<?
ob_start();
function mailsend($to_mail_got,$subject,$msg,$from_email,$from_name_got){ 
	$from_name = $from_name_got;
	$to_mail = $to_mail_got;
	$headers = "MIME-Version: 1.0\n";
	$headers .= "From: \"".$from_name."\" <".$from_email.">\n";
	$headers .= "Return-Path: <".$from_email.">\n"; 
	$headers .= "Content-type: text/html; charset=UTF-8\n";
      
	$mail1 = mail($to_mail,$subject,$msg,$headers);
	return $mail1;
} 


@extract($_POST);

if(isset($Submit))
{

$to = "info@nvscorporate.com";
$from = $email;
$subject = "Enquiry from $name $lastname";
$from_name_got=$name;

$mess ="First Name  : ".$name;
$mess .="<br>Last Name  : ".$lastname;
$mess .="<br>Company  : ".$company;
$mess .="<br>Country  : ".$country;
$mess .="<br>Area  : ".$area;
$mess .="<br>Email   : ".$email;
$mess .="<br>Message  : ".$message;
mailsend($to,$subject,$mess,$from,$from_name_got);
echo "<script>alert('Message has been Successfully Sent.');history.back();window.location.href='thankyou.html';</script>";


}
ob_end_flush();
?>