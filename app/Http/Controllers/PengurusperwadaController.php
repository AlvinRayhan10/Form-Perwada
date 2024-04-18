<?php

namespace App\Http\Controllers;

use App\Models\Pengurusperwada;
use App\Models\Formpengurus;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PengurusExport;
use App\Imports\UsersImport;


class PengurusperwadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formpengurus = Formpengurus::all();
        return view('data.pengurusperwada', compact(['formpengurus']));
    }

    public function export()
    {
        return Excel::download(new PengurusExport, 'Pengurus.xlsx');
    }

    public function import()
    {
        Excel::import(new UsersImport, '.xlsx');

        return redirect('/')->with('success', 'All good!');
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
