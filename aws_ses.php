<?php
/*%******************************************************************************************%*/
// SETUP

require_once 'AWS_SDK/services/ses.class.php';

/*%******************************************************************************************%*/
// Send Emails using Amazon SES

class AWS_SES
{
	public function amazonSesEmail($to, $subject, $message)
	{
		$AWS_SES_FROM_EMAIL = 'no-reply@test.com';

		// Instantiate the class
		$email = new AmazonSES();

		$response = $email->send_email(
		    $AWS_SES_FROM_EMAIL, // Source (aka From)
		    array('ToAddresses' => array( // Destination (aka To)
		        $to
		    )),
		    array( // Message (short form)
		        'Subject.Data' => $subject,
		        'Body.Text.Data' => $message
		    )
		);
	}	
}

?>