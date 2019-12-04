<?php

use Mediumart\Orange\SMS\SMS;
use Mediumart\Orange\SMS\Http\SMSClient;
use App\Models\{Salle, Annee, Inscrire};

function sendSMS($tel, $msg){
    try {
        $client = SMSClient::getInstance(env('API_SMS_CLIENT'), env('API_SMS_SECRET'));
        $sms = new SMS($client);
        $r = $sms->message($msg)->from('+224621432305')->to("+224".trim($tel))->send();
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function lastYear(){
	return Annee::orderBy('id_annee', 'desc')->first();
}

function generateOTP($n = 6) { 
      

    $generator = "1357902468"; 
  
    $result = ""; 
  
    for ($i = 1; $i <= $n; $i++) { 
        $result .= substr($generator, (rand()%(strlen($generator))), 1); 
    } 
  
    // Return result 
    return $result; 
} 

?>
