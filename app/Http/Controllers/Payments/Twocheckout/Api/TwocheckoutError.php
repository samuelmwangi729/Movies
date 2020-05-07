<?php
namespace App\Http\Controllers\Payments\Twocheckout;
use App\Http\Controllers\Payments\Twocheckout\Twocheckout_Message;
use App\Http\Controllers\Payments\Twocheckout;
use  App\Http\Controllers\Payments\Twocheckout\Twocheckout_Notification;
use  App\Http\Controllers\Payments\Twocheckout\Twocheckout_Return;
use Exception;
class Twocheckout_Error extends Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
