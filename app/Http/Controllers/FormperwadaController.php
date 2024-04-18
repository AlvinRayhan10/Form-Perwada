<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formperwada;


class FormperwadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.formperwada');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->file('ktp')->store('upload-img');
       $data = Formperwada::create($request->all());
        if ($data) {
            return response()->json([
                'status'   => true,
                'redirect' => route('dataperwada.index'),
                'messages' => 'Selamat Data Anda Sudah Dibuat.'
            ]);
    }
}
}