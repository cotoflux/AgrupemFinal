<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Event;
use App\Post;
use App\Text;

class HomeController extends Controller
{
    public function index()
    {
        $novelty = Text::getNovelty();
        $all_events = Event::getNonExpiredEvents();
        $all_posts = Post::all();
        $events = $all_events->take(4);
        $posts = $all_posts->take(-3);
        $calendar = Event::getLocalCalendar();
        return view('home',['novelty'=>$novelty, 'events'=>$events, 'posts'=>$posts, 'calendar'=>$calendar]);
    }
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

}
