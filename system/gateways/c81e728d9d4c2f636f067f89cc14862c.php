<?php
/**
 * Twilio SMS Gateway
 * @author Titan Systems
 */

define("TWILIO_GATEWAY", [
	"fromNumber" => "+12518108625", // Your twilio phone number
	"accountSid" => "AC26673ed13356390d1a98649e4db0af09", // Your twilio Account SID
	"authToken" => "8570f50ccdb9ab95389ac73906fc5e3b" // Your twilio authentication token
]);

return [
    "send" => function ($phone, $message, &$system) {
        /**
         * Implement sending here
         * @return bool:true
         * @return bool:false
         */

		$send = json_decode($system->guzzle->post("https://api.twilio.com/2010-04-01/Accounts/" . TWILIO_GATEWAY["accountSid"] . "/Messages.json", [
			"form_params" => [
				"From" => TWILIO_GATEWAY["fromNumber"],
				"Body" => $message,
				"To" => $phone
			],
			"auth" => [
				TWILIO_GATEWAY["accountSid"],
				TWILIO_GATEWAY["authToken"]
			],
			"allow_redirects" => true,
			"http_errors" => false
		])->getBody()->getContents());
	
		if(in_array($send->status, ["accepted", "queued"])):
			return true;
		else:
			return false;
		endif;
    },
    "callback" => function ($request, &$system) {
        /**
         * Implement status callback here if gateway supports it
         * @return array:MessageID
         * @return array:Empty
         */

    }
];