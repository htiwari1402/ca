<?php
include "../model/dao.php";
include './phpmailer/PHPMailerAutoload.php';
$input = file_get_contents("php://input");
$input = json_decode($input,true);
$dao = new DAO();
$dao->submitReg($input);
$fname= $input['fname'];
$lname = $input['name'] ;
$contactNo = $input['contactNo'] ;
$email = $input['email'] ;
$inst = $input['inst'] ;
$sem= $input['sem'] ;
$course = $input['course'];
$body ="Hello Admin,<br><br>
		        New Enquiry from  '$fname' <br>
               <br>
                Name: '$fname' &nbsp; '$lname' <br>
                Contact Number: '$contactNo' <br>
                Email: '$email'  <br>
                Institution: '$inst' <br>
                Semester/Year: '$sem' <br>
                Course: '$course' 
                <br><br><br>
               Thanks,<br>
                Admin( Edusar )";
sendMail("Enquiry", $body, "htiwari1402@gmail.com");
sendMail("Enquiry", $body, "heenasoni23@gmail.com");
sendMail("Enquiry", $body, "er.amitabhtiwari@gmail.com");
function sendMail($subject,$body,$to)
{
	$mail = new PHPMailer;
	//$subject = $_REQUEST['subject'];
	//$body = $_REQUEST['message'];
	//$to = $_REQUEST['to'];
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.edusar.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'admin@edusar.com';                 // SMTP username
	$mail->Password = 'jeovasanctusunus';                           // SMTP password
	//$mail->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25;                                    // TCP port to connect to

	$mail->From = 'admin@edusar.com';
	$mail->FromName = 'Edusar';
	$mail->addAddress($to, $to);     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $subject;     //'Here is the subject';
	$mail->Body    = $body;        //'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
		//echo 'Message could not be sent.';
		//echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		//echo 'Message has been sent';
	}
}
?>
