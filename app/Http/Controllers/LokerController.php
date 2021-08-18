<?php

namespace App\Http\Controllers;

use App\Loker;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_loker =  \App\Loker::all();
        return view('loker.index',['data_loker' => $data_loker]);
    }

    public function profil($id)
    {
        $loker = \App\Loker::find($id);
        return view('loker.profil',['loker' => $loker]);
    }

    public function infoloker()
    {
        $data_loker =  \App\Loker::all();
        return view('loker.loker',['data_loker' => $data_loker]);
    }

    // public function descloker(Loker $loker)
    // {
    //     return view('loker.desc',['loker' => $loker]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Loker::create($request->all());
        return redirect('/loker')->with('success','Data Berhasil Diinput !');
    }

    public function update(Request $request, Loker $loker)
    {
        $loker->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $loker->avatar = $request->file('avatar')->getClientOriginalName();
            $loker->save();
        }
        return redirect('/loker')->with('success','Data Berhasil Diupdate !');
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
    public function edit($id)
    {
        $loker = \App\Loker::find($id);
        return view('loker.edit',['loker' => $loker]);
    }

    public function delete(Loker $loker)
    {
        $loker->delete();
        return redirect('/loker')->with('success','Data Berhasil Dihapus');
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
