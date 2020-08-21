<?php

namespace App;

use App;
use App\traits\Multilanguage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class Event extends Model
{
    use Multilanguage;
    protected $fillable=[
        'title_catalan','title_spanish','content_catalan','content_spanish','startDate', 'endDate', 'expired'
    ];
    static function sortByDate()
    {
        $events = Event::all();
        $eventsSortered = $events->sortBy('startDate');
        return $eventsSortered;
    }
    static function getNonExpiredEvents()
    {
        $events = Event::sortByDate()->where('expired',false);
        return $events;
    }
    public function expireEvent()
    {
        $this->expired = true;
        $this->save();
    }
    static function getPastEvents()
    {
        $today = date('Y-m-d');
        $events = Event::all()->where('endDate','<',$today)->where('expired', false);
        return $events;
    }
    static function expirePastEvents()
    {
        $events = Event::getPastEvents();
        foreach ($events as $event) 
        $event->expireEvent();
    }

    private function validateImg($request)
    {
        $request->validate([
                               
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]); 
    } 

    public function uploadImage($request, $event) 
    {
           
        $event->validateImg($request);   
        
        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $filePath = $event->id. '.jpg';
            $image->storeAs("public/events/",$filePath);            
        }
        
    }
    public function imageUrl()
    {
        $route = "storage/public/events/$this->id.jpg";
        if (File::exists($route))
        {
            return $route;
        }
        return false;
    }
}
