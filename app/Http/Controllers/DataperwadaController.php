<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\Formperwada;
use App\Exports\PerwadaExport;
use App\Models\Dataperwada;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
Use Yajra\DataTables\DataTables;

class DataperwadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formperwada = Formperwada::all();
        return view('data.dataperwada', compact(['formperwada']));
    }

    public function export()
    {
        return Excel::download(new PerwadaExport, 'Perwada.xlsx');
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
            Formperwada::create($request->all());
            return redirect('home');
        }
    }