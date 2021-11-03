<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\aadhar\upload\Eaadhaar;

Route::group(['prefix' => 'v1', 'namespace' => 'API',], function () {

    /* Start AadharCard Otp Genrate*/
    Route::post('aadhaar-validation', 'aadhar\AadhaarValidation\AadhaarValidation@aadhaarvalidation');
    /* End AadharCard Otp Genrate*/

    /* Start AadharCard Otp Verify */
    Route::post('submit-otp', 'aadhar\AadhaarValidation\AadhaarValidation@submitotp');
    /* End AadharCard Otp Verify */

    /* Start Pancard */
    Route::post('pancard-validation', 'pancard\PanCardValidation\PanCardValidation@pancardvalidation');
    /* End Pancard */

    /* Start Bank Verification */
    Route::post('bank-verification', 'bankverification\BankValidation\BankValidation@bankvalidation');
    /* End Bank Verification */

    /* Start Send Sms */
    Route::post('send-sms', 'sendsms\SendSms@sendsms');
    /* End Send Sms */

    /* Start QR Code genrationd */
    //Route::post('qr-genrate', 'QrcodgenController@register');
    Route::post('qr-genrate', 'qrcode\QrCodeGenrate@qrgenrate');
    //Route::post('qr-genrate', 'qrcode\QrCodeGenrate@index');
    /* End QR Code genrationd */
});
