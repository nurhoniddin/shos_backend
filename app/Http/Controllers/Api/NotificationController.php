<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index(){
        $notification = Notification::orderBy('id','DESC')->get();
        return response()->json(compact('notification'));
    }
}
