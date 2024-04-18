<?php

namespace App\Http\Controllers;

use App\Models\Pengurusperwada;
use App\Models\Formpengurus;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class TestdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formpengurus = Formpengurus::all();
        return view('data.testdata', compact(['formpengurus']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Formpengurus::create($request->all());
        return redirect('home');
    }

}
