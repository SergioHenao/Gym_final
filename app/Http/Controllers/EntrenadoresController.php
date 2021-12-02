<?php

namespace App\Http\Controllers;

use App\Models\Entrenadores;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EntrenadoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }       

    public function index()
    {
        if(auth()->user()->rol !='admin'){
            return redirect('Inicio');
        }
        $entrenadores = DB::select('select * from users where rol= "entrenador"');
        return view('modulos.Entrenadores')->with('entrenadores',$entrenadores);
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
        $info =request()->validate([
            'name'=>['required'],
            'email'=>['required'],
            'password'=>['required', 'string','min:3'],
            ]);
        Entrenadores::create ([
            'name'=>$info['name'],
            'email'=>$info['email'],
            'rol'=>'entrenador',
            'password'=>Hash::make($info['password'])
            ]);
            return redirect('Entrenadores');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function show(Entrenadores $entrenadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrenadores $id)
    {
        if(auth()->user()->rol != 'admin'){
            return redirect('Inicio');
        }
        $entrenadores=Entrenadores::find($id->id);
        return view('modulos.Editar-entrenadores')->with('entrenadores',$entrenadores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrenadores $id)
    {
        $entrenadores=Users::findOrFail($id);
        $entrenadores->name=$request->input('name');
        $entrenadores->email=$request->input('email');
        $entrenadores->password=$request->input('password');
        $entrenadores->save();
        return redirect()->route('Entrenadores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenadores $id)
    {
        DB::table('users')->whereid($id)->delete();
        return redirect('Entrenadores');
    }
}
