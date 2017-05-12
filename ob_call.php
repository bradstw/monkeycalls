<?php 
require '/var/www/html/services/lookup/twilio-php-master/Services/Twilio.php'; // Loads the library

$sid = 		"ACCOUNT SECRET ID GOES HERE";
$token = 	"ACCOUNT TOKEN GOES HERE";

$client = new Services_Twilio($sid, $token);

$call_to = "";
$call_from = "";
$process_url = "";

// Initiate a new outbound call
try {
	$call = $client->account->calls->create(
			// From Number
			$call_from,
			// Number to be dialed
			$call_to,
			// URL to Process for call
			$process_url
			);
	
	echo "Started call: " . $call->sid;
} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
}

?>