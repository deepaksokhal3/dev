<?php

namespace App\Http\Controllers;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;

class GoogleCalenderController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
    //auth
    }

     /**
     * Show the application Google Calendar.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    
    	$events = Event::get();  
    	return view('front.calendar.index',compact('events'));

    }
}