<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$xUsers = User::all()->sortBy('name');
        $xidempresa = Auth::user()->idempresa;
        $xUsers = User::where('idempresa', $xidempresa)->get();//->orderBy('name');
        return view('g-usuarios.index', compact('xUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gUser = new User();
        return view('g-usuarios.create',compact('gUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        if ($request->password != $request->password2) {
            //return Redirect::back()->withErrors(['msg' => 'The Message']);
            return redirect('g-usuarios')->with(['success' => 'Las claves no coinciden!!!']);
        } else {
            $request->merge(['idempresa' => 1]);
            $User = User::create($request->all());
            return redirect('g-usuarios')->with(['message' => 'Usuario creado correctamente!!!']);
        }

    }

    public function show(User $mUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MUser  $mUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id, User $mUser)
    {
        $gUser = User::find($id);
        return view('g-usuarios.edit',compact('gUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MUser  $mUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $mUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MUser  $mUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $mUser)
    {
        //
    }
}
