<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('dashboard/events/index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/events/create');
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
            'title'=>'required',
            'address'=>'required',
            'zip'=>'required',
            'city'=>'required',
            'service_cost'=>'numeric',
            'ticket_price'=>'numeric',
            'end_date'=>'required',
        ]);

        $event = new event();
        $event->title = $request->title;
        $event->address = $request->address;
        $event->zip = $request->zip;
        $event->city = $request ->city;
        $event->service_cost = $request ->service_cost;
        $event->ticket_price = $request ->ticket_price;
        $event->start_time = $request->start_time;
        $event->end_date = $request->end_date;
        $event->description;
        $event->capacity;
        $event->save();

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = event::findorfail($id);
            return view('dashboard/events.show')->with(['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = event::findorfail($id);

        $event - delete();

        Session::flash('flash_message', 'Task successfully deleted!');

        return redirect()->route('events.index');

    }
}
