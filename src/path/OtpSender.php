<?php

namespace Authentication\path;

use Authentication\Interface\OtpSenderInterface;

class OtpSender implements OtpSenderInterface
{
    public function sendOtp(string $mobile, array $tokens)
    {
        // $smsService = new SmsService();
        // $smsService->send($mobile,$tokens,SmsService::VERIFY_OTP);
    }
}