<?php

namespace App\Http\Controllers;

use App\Kuliah;
use Illuminate\Http\Request;

class KuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kuliah = \App\Kuliah::all();
        return view('kuliah.index',['data_kuliah' => $data_kuliah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Kuliah::create($request->all());
        return redirect('/kuliah')->with('success','Data Berhasil Diinput !');
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
        $kuliah = \App\Kuliah::find($id);
        return view('kuliah.edit',['kuliah' => $kuliah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kuliah = \App\Kuliah::find($id);
        $kuliah->update($request->all());
        return redirect('/kuliah')->with('success','Data Berhasil Diupdate !');
    }

    public function delete(Kuliah $kuliah)
    {
        $kuliah->delete();
        return redirect('/kuliah')->with('success','Data Berhasil Dihapus');
    }

    
    public function infokuliah()
    {
        $data_kuliah =  \App\Kuliah::all();
        return view('kuliah.info',['data_kuliah' => $data_kuliah]);
    }

    // public function detailkuliah(Kuliah $kuliah)
    // {
    //     return view('kuliah.detail',['kuliah' => $kuliah]);
    // }

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
