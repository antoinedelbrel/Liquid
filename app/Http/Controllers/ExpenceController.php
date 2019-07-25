<?php

namespace App\Http\Controllers;

use App\Expence;
use Illuminate\Http\Request;
use App\Guest;
use App\Event;

class ExpenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expences = Expence::all();

        return view('expences.index', compact('expences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guests = Guest::all();
        $events = Event::all();
        
        return view('expences.create', compact('guests','events'));
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
            'price' => 'required',
            'guest_id' => 'required',
            'event_id' => 'required',
        ]);
        Expence::create($request->all());

        return redirect()->route('expences.index')
                        ->with('success','Expence created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function show(Expence $expence)
    {
        return view('expences.show', compact('expence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function edit(Expence $expence)
    {
        return view('expences.edit', compact('expence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expence $expence)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'guest_id' => 'required',
            'event_id' => 'required',
        ]);
        Expence::updated($request->all());

        return redirect()->route('expences.index')
                        ->with('success', 'Expence updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expence $expence)
    {
        $expence->delete();

        return redirect()->route('expences.index')
                        ->with('success', 'Expence delete successfully');
    }
}
