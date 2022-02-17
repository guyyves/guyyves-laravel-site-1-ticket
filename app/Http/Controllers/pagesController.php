<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;


class pagesController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function test(){
        return view('pages/test');
    }

    public function test2(){
        return view('pages/test2');
    }

    public function events(){
        $events = Event::where('start_time', '>', now())->get() ;
        return view('pages/events')->with('events', $events);
    }
}
