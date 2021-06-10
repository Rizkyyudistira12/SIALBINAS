<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use App\Alumni;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_alumni = \App\Alumni::all();
        return view('alumni.index',['data_alumni' => $data_alumni]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'nama' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'gender' => 'required',
            'pekerjaan' => 'required',
            'avatar' => 'mimes:jpeg,png'
        ]);
        //Insert to table user
        $user = new \App\User;
        $user->role = 'alumni';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('alumnismknas');
        $user->remember_token = Str::random(60);
        $user->save();

        //Insert to table Alumni
        $request->request->add(['user_id' => $user->id]);
        $alumni = \App\Alumni::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $alumni->avatar = $request->file('avatar')->getClientOriginalName();
            $alumni->save();
        }
        return redirect('/alumni')->with('success','Data Berhasil Diinput !');
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        return view('alumni.edit',['alumni' => $alumni]);
    }

    public function profil(Alumni $alumni)
    {
        return view('alumni.profil',['alumni' => $alumni]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        $alumni->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $alumni->avatar = $request->file('avatar')->getClientOriginalName();
            $alumni->save();
        }
        return redirect('/alumni')->with('success','Data Berhasil Diubah');
    }

    public function delete(Alumni $alumni)
    {
        $alumni->delete();
        return redirect('/alumni')->with('success','Data Berhasil Dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
