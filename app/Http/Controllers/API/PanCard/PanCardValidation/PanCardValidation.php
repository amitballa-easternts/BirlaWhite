<?php

namespace App\Http\Controllers\API\PanCard\PanCardValidation;

use App\Http\Requests\Pancard\PanCardValidationRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use GuzzleHttp;

class PanCardValidation extends Controller
{
    /**
     * Get Pancard Detail
     * @param PanCardValidationRequest $request
     * 
     */
    public function pancardvalidation(PanCardValidationRequest $request)
    {
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTYzNDEyMDQzMiwianRpIjoiMjY2YzliZGQtNTYyOC00M2I1LThkOGQtZjc5NjNjNGFjMmZkIiwidHlwZSI6ImFjY2VzcyIsImlkZW50aXR5IjoiZGV2LmFkaXR5YWJpcmxhQGFhZGhhYXJhcGkuaW8iLCJuYmYiOjE2MzQxMjA0MzIsImV4cCI6MTk0OTQ4MDQzMiwidXNlcl9jbGFpbXMiOnsic2NvcGVzIjpbInJlYWQiXX19._tHfR3FwZsQZ-EBvKlga031KdCPeUdXGw-JksGRIQVE";
        $response = Http::withHeaders([
            'Authorization' =>  'Bearer ' . $token
        ])->post('https://kyc-api.surepass.io/api/v1/pan/pan', [
            'id_number' => $request->id_number,
        ]);
        $responseArray = $response->json();
        return  $responseArray;
    }
}
