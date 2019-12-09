<?php  //error_reporting(-1); ?>
<?php  //ini_set('display_errors', true); ?>

<?php
include 'resources/creds.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$textmessage = $_POST['textmessage'];


require_once 'vendor/autoload.php';

try {
	// prepare email message
	$message = (new Swift_Message())
		->setSubject('Urgent! New Rate Request on Fortex Brokerage')
		->setFrom(['russobrothersHR@gmail.com' => 'Rate Request'])
		->setTo(['russodispatch@gmail.com' => 'Russo Brothers Transport Inc'])
		->setBody("Someone just sent a rate request:\r\nFull Name: $name \r\nPhone Number: $phone\r\n E-mail: $email\r\nMessage: $textmessage\r\nDO NOT REPLY TO THIS EMAIL!");

		$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
		->setUsername($username)
		->setPassword($password);
		$mailer = new Swift_Mailer($transport);
		$result = $mailer->send($message);
		if ($result) {
			echo "<h3><center>Your application was submited. We will get back to you as soon as we review your application.</center></h3>";
		} else {
			echo "There was an error submitting your application. Please call us at (916) 910-4818 or (916) 715-3739";
		}
} catch (Exception $e) {
	echo $e->getMessage();
}


 ?> 


