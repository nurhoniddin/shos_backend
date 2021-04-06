<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $staff = Staff::orderBy('id','DESC')->get();
        return response()->json(compact('staff'));
    }
}
