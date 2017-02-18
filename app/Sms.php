<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use App\Classes\SmsGateway;  

class Sms extends Model
{
    public static function sendSms($numbers=[], $deviceID=36605, $message='')
    {     

        // print  " messages = " . $message;
        $smsGateway = new SmsGateway('mrjesuserwinsuarez@gmail.com', 'replacement1');   
        // $deviceID = 36605; 
        // $message = 'Hello World!'; 
        // $options = [
        // 'send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes
        // 'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
        // ];  
        //Please note options is no required and can be left out
        $result = $smsGateway->sendMessageToManyNumbers($numbers, $message, $deviceID);  
        // print "<pre>";
        // print_r($result); 
        // print "</pre>";  
        // 
        //  
        return  $result; 
    }
}
