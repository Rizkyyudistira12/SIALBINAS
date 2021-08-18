<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_event =  \App\Event::all();
        return view('event.index',['data_event' => $data_event]);
    }

    public function detailevent(Event $event)
    {
        return view('event.detail',['event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Event::create($request->all());
        return redirect('/event')->with('success','Data Berhasil Diinput !');
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
        $event = \App\Event::find($id);
        return view('event.edit',['event' => $event]);
    }

    public function delete(Event $event)
    {
        $event->delete();
        return redirect('/event')->with('success','Data Berhasil Dihapus');
    } 

    public function agenda()
    {
        $data_event =  \App\Event::all();
        return view('event.agenda',['data_event' => $data_event]);
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
        $event = \App\Event::find($id);
        $event->update($request->all());
        return redirect('/event')->with('success','Data Berhasil Diupdate !');
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
