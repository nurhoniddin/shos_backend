<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index(){
        $man = Management::orderBy('id','DESC')->get();
        return response()->json(compact('man'));
    }
}
