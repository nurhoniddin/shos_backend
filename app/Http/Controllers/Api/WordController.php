<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $word = Word::orderBy('id','DESC')->get();
        return response()->json(compact('word'));
    }
}
