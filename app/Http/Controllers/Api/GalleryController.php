<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Gcategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $gallery = Gcategory::orderBy('id','DESC')->get();
        return response()->json(compact('gallery'));
    }
}
