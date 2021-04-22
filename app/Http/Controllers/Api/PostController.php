<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $post = Post::orderBy('id','DESC')->get();
        return response()->json(compact('post'));
    }

    public function details($id)
    {
        $details = Post::where('id',$id)->first();
//        $postviews = Post::where('id', $id )->first();
        $details->increment('views_count', + 1);
        return response()->json(compact('details'));
    }

    public function posts($category_id)
    {
        $details = Post::where('category_id',$category_id)->get();

        return response()->json(compact('details'));
    }

    public function count()
    {
        $count = Post::orderBy('views_count','DESC')->get();

        return response()->json(compact('count'));
    }

    public function search(Request $request)
    {
        $search = $request->input('name');
        $search_post = Post::where('title_uz','like','%'.$search.'%')
            ->orwhere('title_cyril','like','%'.$search.'%')
            ->orwhere('title_ru','like','%'.$search.'%')
            ->orwhere('title_en','like','%'.$search.'%')
            ->orwhere('description_uz','like','%'.$search.'%')
            ->orwhere('description_cyril','like','%'.$search.'%')
            ->orwhere('description_ru','like','%'.$search.'%')
            ->orwhere('description_en','like','%'.$search.'%')->get();

        return response()->json(compact('search_post'));
    }
}
