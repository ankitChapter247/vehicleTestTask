<?php

namespace App\Http\Controllers;

use App\Models\Hub;
use Illuminate\Http\Request;

class HubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hubs = Hub::paginate(50);
        return view('hub.index', compact('hubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hub.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
  
        Hub::create($request->all());
   
        return redirect()->route('hubs.index')
                        ->with('success', 'Hub created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function show(Hub $hub)
    {
        return view('hub.show', compact('hub'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function edit(Hub $hub)
    {
        return view('hub.edit', compact('hub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hub $hub)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
  
        $hub->update($request->all());
  
        return redirect()->route('hubs.index')
                        ->with('success', 'hub updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hub $hub)
    {
        $hub->delete();
  
        return redirect()->route('hubs.index')
                        ->with('success', 'Hub deleted successfully');
    }
}
