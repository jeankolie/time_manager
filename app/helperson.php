<?php

use Mediumart\Orange\SMS\SMS;
use Mediumart\Orange\SMS\Http\SMSClient;

function sendSMS($tel, $msg)
{
	$client = SMSClient::getInstance('<client_id>', '<client_secret>');
   try {

   		$sms = new SMS($client);
   		$sms->message($msg)
    	->from('+224621432305')
    	->to('+224'.$tel)
    	->send();
    	return true;
   } catch (Exception $e) {
   	
   }
}

?>
