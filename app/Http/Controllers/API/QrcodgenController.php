<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Qrcodgen;
use Illuminate\Http\Request;

class QrcodgenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input = [
            'code' => $this->qrgenrate()
        ];

        $qr = Qrcodgen::create($input);

        dd($qr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        return Qrcodgen::Register($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qrcodgen  $qrcodgen
     * @return \Illuminate\Http\Response
     */
    public function show(Qrcodgen $qrcodgen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qrcodgen  $qrcodgen
     * @return \Illuminate\Http\Response
     */
    public function edit(Qrcodgen $qrcodgen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Qrcodgen  $qrcodgen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qrcodgen $qrcodgen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qrcodgen  $qrcodgen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qrcodgen $qrcodgen)
    {
        //
    }
}
