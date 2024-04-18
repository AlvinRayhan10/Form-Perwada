<?php

namespace App\Http\Controllers;

use App\Models\Layananpusat;
use App\Models\Formpusat;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LayananExport;
use App\Imports\UsersImport;

class LayananpusatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formpusat = Formpusat::all();
        return view('data.layananpusat', compact(['formpusat']));
    }

    public function export()
    {
        return Excel::download(new PusatExport, 'Pusat.xlsx');
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
        Formpusat::create($request->all());
        return redirect('home');
    }
}