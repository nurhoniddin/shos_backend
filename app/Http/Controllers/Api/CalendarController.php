<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $calendar = Calendar::orderBy('id','DESC')->get();
        return response()->json(compact('calendar'));
    }
}
