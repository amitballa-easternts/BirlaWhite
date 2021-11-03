<?php

namespace App\Http\Controllers\API\QrCode;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qrcodgen;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class QrCodeGenrate extends Controller
{
    public function index(Request $request)
    {


        $input = [
            'qrCodgen' => $this->qrgenrate($request->number)
        ];

        $qr = Qrcodgen::create($input);

        // dd($qr);
    }
    public function qrgenrate(Request $request)
    {


        $int = $request->number;
        for ($i = 0; $i < $int; $i++) {
            $randomvalue = random_int(0, 999999);
            $value = trim(str_replace("8", "", $randomvalue));
            $a = str_shuffle("ACDEFGHIJKLMNPQRSTUVWXYZ");
            $b = substr($a, 1, 2);
            if ($value <= 9) {
                $value = sprintf("%06d", $value);
            } elseif ($value < 99) {
                $value = sprintf("%06d", $value);
            } elseif ($value < 999) {
                $value = sprintf("%06d", $value);
            } elseif ($value < 9999) {
                $value = sprintf("%06d", $value);
            }
            $getvalue = $b . $value;

            print  $getvalue . '<br>';


            $input = [
                'qrCodgen' => $this->generateUniqueCode($getvalue)

            ];
            /*     Qrcodgen::where("qrCodgen", "=", $getvalue)->get();
            return $getvalue; */
            Qrcodgen::create($input);
        }
    }
    public function generateUniqueCode($row)
    {

        do {
            $row;
        } while (Qrcodgen::where("qrCodgen", "=", $row)->first());

        return $row;
    }
}
