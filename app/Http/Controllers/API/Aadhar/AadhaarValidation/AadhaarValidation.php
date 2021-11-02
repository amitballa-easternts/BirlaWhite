<?php

namespace App\Http\Controllers\API\aadhar\AadhaarValidation;

use App\Http\Requests\Aadhar\AadhaarValidationRequest;
use App\Http\Requests\Aadhar\AadharOptVerifyRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AadhaarValidation extends Controller
{
    /**
     * Get Aadharcard Detail
     * @param AadhaarValidationRequest $request
     * 
     */
    public function aadhaarvalidation(AadhaarValidationRequest $request)
    {

        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTYzNDEyMDQzMiwianRpIjoiMjY2YzliZGQtNTYyOC00M2I1LThkOGQtZjc5NjNjNGFjMmZkIiwidHlwZSI6ImFjY2VzcyIsImlkZW50aXR5IjoiZGV2LmFkaXR5YWJpcmxhQGFhZGhhYXJhcGkuaW8iLCJuYmYiOjE2MzQxMjA0MzIsImV4cCI6MTk0OTQ4MDQzMiwidXNlcl9jbGFpbXMiOnsic2NvcGVzIjpbInJlYWQiXX19._tHfR3FwZsQZ-EBvKlga031KdCPeUdXGw-JksGRIQVE";
        $response = Http::withHeaders([
            'Authorization' =>  'Bearer ' . $token
        ])->post('https://kyc-api.surepass.io/api/v1/aadhaar-v2/generate-otp', [
            'id_number' => $request->id_number,
        ]);
        $responseArray = $response->json();
        return  $responseArray;
    }
    public function submitotp(AadharOptVerifyRequest $request)
    {
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTYzNDEyMDQzMiwianRpIjoiMjY2YzliZGQtNTYyOC00M2I1LThkOGQtZjc5NjNjNGFjMmZkIiwidHlwZSI6ImFjY2VzcyIsImlkZW50aXR5IjoiZGV2LmFkaXR5YWJpcmxhQGFhZGhhYXJhcGkuaW8iLCJuYmYiOjE2MzQxMjA0MzIsImV4cCI6MTk0OTQ4MDQzMiwidXNlcl9jbGFpbXMiOnsic2NvcGVzIjpbInJlYWQiXX19._tHfR3FwZsQZ-EBvKlga031KdCPeUdXGw-JksGRIQVE";
        $response = Http::withHeaders([
            'Authorization' =>  'Bearer ' . $token
        ])->post('https://kyc-api.surepass.io/api/v1/aadhaar-v2/submit-otp', [
            'client_id' => $request->client_id,
            'otp' => $request->otp,
        ]);
        $responseArray = $response->json();
        return  $responseArray;
    }
}
