<?php

namespace App\Http\Controllers;

use App\Guest_Event;
use Illuminate\Http\Request;
use App\Guest;
use App\Event;

class GuestEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Guest_Event  $guest_Event
     * @return \Illuminate\Http\Response
     */
    public function show(Guest_Event $guest_Event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guest_Event  $guest_Event
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest_Event $guest_Event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guest_Event  $guest_Event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest_Event $guest_Event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guest_Event  $guest_Event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest_Event $guest_Event)
    {
        //
    }
}
