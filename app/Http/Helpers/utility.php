<?php

use Illuminate\Support\Facades\Http;

function getImg($src)
{
    if (!$src) return asset('placeholder-doctor.webp');
    return asset('storage/' . $src);
}


function getActiveLink($routeName, $activeClass = 'active')
{
    return request()->routeIs($routeName) ? $activeClass : '';
}


function sendSms($phone, $msg)
{
    if (!$phone) return;

    $response = Http::post(env('SMS_BASE_URL') . '/SendSMS', [
        'ApiKey' => env('SMS_API_KEY'),
        'ClientId' => env('SMS_CLIENT_ID'),
        'SenderId' => env('SMS_SENDER_ID'),
        'Message' => $msg,
        "Is_Unicode" => true,
        'MobileNumbers' => "88" . $phone,
    ]);
    
    return $response->json();
}
