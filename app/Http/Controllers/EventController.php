<?php

namespace App\Http\Controllers;

use App\Event; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{

    public function index()
    {
        $events=Event::getNonExpiredEvents();
        $calendar = Event::getLocalCalendar();
        return view('event.index',['events'=>$events, 'calendar'=>$calendar]);
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(Request $request)
    {
        $event=Event::create($request->all());
        $event->uploadImage($request,$event);
        return redirect('event');
    }
    
    public function show(Event $event)
    {
        $route = $event->imageUrl($event);
        return view('event.event',['event'=>$event, 'route'=>$route]);
        
    }
    
    public function edit(Event $event)
    {
        return view('event.edit',['event'=>$event]);
    }
    
    public function update(Request $request, Event $event)
    {
        $event->update($request->all());
        $event->uploadImage($request,$event);
        return redirect("event/$event->id");
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('event');
    }

    public function deleteImage(Event $event)
    {
        Storage::delete("public/events/$event->id.jpg");
        return redirect("event/$event->id");
    }
}
