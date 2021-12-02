<?php

namespace App\Http\Controllers;

use App\Models\Clases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function clases2()
    {
        if (auth()->user()->rol !="user"){
            return redirect('Inicio');
        }
        $plans = DB::select('select * from clases');
        return view('modulos.Clases2')->with('plans',$plans);
    }

    public function clases3()
    {
        if (auth()->user()->rol !="entrenador"){
            return redirect('Inicio');
        }
        $plans = DB::select('select * from clases');
        return view('modulos.Clases3')->with('plans',$plans);
    }

    public function index()
    {
        if (auth()->user()->rol !="admin"){
            return redirect('Inicio');
        }
        $clases = DB::select('select * from clases');
        return view('modulos.Clases')->with('clases',$clases);

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
    public function store(Request $request)
    {
        $datos =request()->validate([
            'name'=>['required'],
            'dias'=>['required'],
            'horario'=>['required']
            ]);
           
        Clases::create([
            'name'=> $datos['name'],
            'dias'=> $datos['dias'],
            'horario' => $datos['horario'],
        ]);
        return redirect ('Clases');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function show(Clases $clases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function edit(Clases $id)
    {
        if(auth()->user()->rol != 'admin'){
            return redirect('Inicio');
        }
        $clases=Clases::find($id->id);
        return view('modulos.EditarClases')->with('clases',$clases);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clases $id)
    {
        $clases=Clases::findOrFail($id);
        $clases->name=$request->input('name');
        $clases->dias=$request->input('dias');
        $clases->horario=$request->input('horario');
        $clases->save();
        return redirect()->route('clases');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('clases')->whereid($id)->delete();
        return redirect('Clases');

    }
}
