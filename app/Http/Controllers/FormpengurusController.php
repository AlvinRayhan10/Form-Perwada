<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formpengurus;

class FormpengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.formpengurus');
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
        $data = Formpengurus::create($request->all());
        if ($data) {
            return response()->json([
                'status'   => true,
                'redirect' => route('pengurusperwada.index'),
                'messages' => 'Selamat Data Anda Sudah Dibuat.'
            ]);
        }
    }


}