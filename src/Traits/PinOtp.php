<?php

namespace AhMobin\PinPolicy\Traits;
use AhMobin\PinPolicy\Models\OtpPin;

trait PinOtp
{
    public function generateOtp($identifier)
    {
        $otp = mt_rand(111111,999999);
        OtpPin::create([
           'identifier' => $identifier,
           'otp' => $otp
        ]);
    }
}
