<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function calendar(){
        $events = Event::all();
        return view('event.calendar', ['events'=>$events]);
    }
}
