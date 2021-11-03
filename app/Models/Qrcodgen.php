<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcodgen extends Model
{

    protected $table = "qrcodgens";
    public $timestamps = false;
    protected $fillable = [
        'qrCodgen'
    ];
    protected $casts = [
        //
        'qrCogeid' => 'string',
        'qrCodgen' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
    ];
    public function scopeRegister($query, $request)
    {
        //return dd($request);
        $data = $request->all();

        Qrcodgen::create($data);
    }
}
