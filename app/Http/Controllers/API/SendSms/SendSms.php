<?php

namespace App\Http\Controllers\API\SendSms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SendSms extends Controller
{
    public function sendsms(Request $request)
    {
        //return $request->senderid;
        $token = "fwQwJxPit5i0LI6A";
        $senderid = "TESTID";
        $response = Http::post('http://msg.mtalkz.com/V2/http-api-post.php', [
            "apikey" => $token,
            "senderid" => $senderid,
            "number" => $request->number,
            "message" => $request->message,
            "format" => "json"
        ]);
        $responseArray = $response->json();
        return  $responseArray;
    }
}
