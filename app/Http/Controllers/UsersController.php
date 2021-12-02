<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
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
        $users = DB::select('select * from users where rol= "user"');
        return view('modulos.Users')->with('users',$users);
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
        Users::create ([
            'name'=>$info['name'],
            'email'=>$info['email'],
            'rol'=>'user',
            'password'=>Hash::make($info['password'])
            ]);
            return redirect('Users');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $id)
    {
        if(auth()->user()->rol != 'admin'){
            return redirect('Inicio');
        }
        $users=Users::find($id->id);
        return view('modulos.Editar-users')->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $id)
    {
        $users=Users::findOrFail($id);
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->password=$request->input('password');
        $users->save();
        return redirect()->route('Users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $id)
    {
        DB::table('users')->whereid($id)->delete();
        return redirect('Users');
    }
}
