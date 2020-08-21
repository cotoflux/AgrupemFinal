<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Event;
use App;

class EventTest extends TestCase
{
    use RefreshDatabase;

    public function test_events_ordered_by_date()
    {
        $events=factory(Event::class,15)->create();
        $event=factory(Event::class)->create(['startDate'=>'0001-01-01']);
        $events=Event::sortByDate();
        $firstEvent = $events->first();
        $response = $firstEvent->startDate;
        $expected = $event->startDate;
        $this->assertEquals($response, $expected);
    }
    public function test_get_only_nonExpired_events()
    {
        factory(Event::class,2)->create(['expired'=>true]);
        factory(Event::class,3)->create(['expired'=>false]);
        $allEvents = Event::all();
        $nonExpiredEvents=Event::getNonExpiredEvents();
        $this->assertCount(5,$allEvents);
        $this->assertCount(3,$nonExpiredEvents);
    }

    public function test_expire_event()
    {
        $event=factory(Event::class)->create();
        $this->assertFalse($event->expired);
        $event->expireEvent();
        $this->assertTrue($event->expired);
    }
    public function test_expire_if_date_is_past()
    {
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        factory(Event::class,2)->create(['endDate'=>$yesterday]);
        Event::expirePastEvents();
        $events=Event::all();
        foreach ($events as $event){
        $this->assertTrue((boolean)$event->expired);}
    }
    public function test_get_all_past_nonExpired_events()
    {
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        factory(Event::class)->create(['expired'=>false,'endDate'=>$yesterday]);
        $events = Event::getPastEvents();
        $this->assertCount(1,$events);
    }
    public function test_dont_get_expired_events()
    {
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        factory(Event::class)->create(['expired'=>true,'endDate'=>$yesterday]);
        $events = Event::getPastEvents();
        $this->assertCount(0,$events);
    }
    public function test_dont_get_nonPast_events()
    {
        $today = date('Y-m-d');
        factory(Event::class)->create(['expired'=>false,'endDate'=>$today]);
        $events = Event::getPastEvents();
        $this->assertCount(0,$events);
    }
    public function test_get_catalan_title()
     {   
         App::setLocale('cat');
         $event=factory(Event::class)->create();
         $expected=$event->title_catalan;
         $response = $event->getLocalTitle();
         $this->assertEquals($expected,$response);
    }
    public function test_get_spanish_title()
    {   
        App::setLocale('es');
        $event=factory(Event::class)->create();
        $expected=$event->title_spanish;
        $response = $event->getLocalTitle();
        $this->assertEquals($expected,$response);
   }
   public function test_get_catalan_title_if_no_spanish_title()
   {
    App::setLocale('es');
    $event=factory(Event::class)->create(['title_spanish'=>NULL]);
    $expected=$event->title_catalan;
    $response = $event->getLocalTitle();
    $this->assertEquals($expected,$response);
   }
   public function test_get_catalan_title_if_non_specific_locale()
   {
    App::setLocale('en');
    $event=factory(Event::class)->create();
    $expected=$event->title_catalan;
    $response = $event->getLocalTitle();
    $this->assertEquals($expected,$response);
   }
   public function test_get_catalan_content()
   {   
       App::setLocale('cat');
       $event=factory(Event::class)->create();
       $expected=$event->content_catalan;
       $response = $event->getLocalContent();
       $this->assertEquals($expected,$response);
  }
  public function test_get_spanish_content()
  {   
      App::setLocale('es');
      $event=factory(Event::class)->create();
      $expected=$event->content_spanish;
      $response = $event->getLocalContent();
      $this->assertEquals($expected,$response);
 }
 public function test_get_catalan_content_if_no_spanish_content()
 {
  App::setLocale('es');
  $event=factory(Event::class)->create(['content_spanish'=>NULL]);
  $expected=$event->content_catalan;
  $response = $event->getLocalContent();
  $this->assertEquals($expected,$response);
 }
 public function test_get_catalan_content_if_non_specific_locale()
 {
  App::setLocale('en');
  $event=factory(Event::class)->create();
  $expected=$event->content_catalan;
  $response = $event->getLocalContent();
  $this->assertEquals($expected,$response);
 }
}