<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formpusat;
class FormpusatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.formpusat');
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
        $data = Formpusat::create($request->all());
        if ($data) {
            return response()->json([
                'status'   => true,
                'redirect' => route('layananpusat.index'),
                'messages' => 'Selamat Data Anda Sudah Dibuat.'
            ]);
        }
    }
}