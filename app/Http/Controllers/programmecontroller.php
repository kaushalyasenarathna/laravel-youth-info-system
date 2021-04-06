<?php

namespace App\Http\Controllers;

use App\Models\programme;
use App\Models\type;
use Illuminate\Http\Request;

class programmecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(programme $programme) 
    {
    
        $data=programme:: get();
        // dd($data);
        return view('programme.index')->with(compact('data'));
       
        // $item=$programme->type;
      
        // $data=programme::where('type','=',)->get();
        // return view('programme.index')->with(compact('data'));
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
        programme::create($request->all());
        return redirect()->route('programme.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\programme  $main
     * @return \Illuminate\Http\Response
     */
    public function show(programme $programme)
     {
        // $data=programme::get();
        // return view('programme.show')->with(compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit(programme $programme)
    {
        
        return view('programme.edit',compact('programme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\programme  $main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, programme $programme)
    {
         
        $programme->update($request->all());
        return redirect()->route('programme.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\programme  $main
     * @return \Illuminate\Http\Response
     */
    public function destroy(programme $programme)
    {
        //
    }
}

