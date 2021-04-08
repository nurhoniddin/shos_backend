<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $event = Event::orderBy('id','DESC')->get();
        return response()->json(compact('event'));
    }
    public function single_event($id){
        $event = Event::where('id', $id)->first();
        return response()->json(compact('event'));
    }
}
