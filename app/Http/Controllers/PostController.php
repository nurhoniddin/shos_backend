<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('posts.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Post();

        $data->title_uz = $request->input('title_uz');
        $data->title_cyril = $request->input('title_cyril');
        $data->title_ru = $request->input('title_ru');
        $data->title_en = $request->input('title_en');
        $data->description_uz = $request->input('description_uz');
        $data->description_cyril = $request->input('description_cyril');
        $data->description_ru = $request->input('description_ru');
        $data->description_en = $request->input('description_en');
        $data->body_uz = $request->input('body_uz');
        $data->body_cyril = $request->input('body_cyril');
        $data->body_ru = $request->input('body_ru');
        $data->body_en = $request->input('body_en');
        $data->category_id = $request->input('category_id');

        // $data->image  = $request->input('image');
        $imagePath = request('image')->store('news', 'public');
        // $img = Image::make(public_path("storage/{$imagePath}"))->fit(2200,850);
        // $img->save();

        // $image= new FileUpload();
        $data->image = $imagePath;

        $data->save();

        return redirect()->route('posts.index')
            ->with('success', 'Yangilik yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $category = Category::all();
        return view('posts.edit', compact('post', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::find($id);
        if ($request->hasFile('image')) {
//            $request->validate([
//                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//            ]);
            $path = $request->file('image')->store('news','public');
            $post->image = $path;
        }

        $post->title_uz = $request->input('title_uz');
        $post->title_cyril = $request->input('title_cyril');
        $post->title_ru = $request->input('title_ru');
        $post->title_en = $request->input('title_en');
        $post->description_uz = $request->input('description_uz');
        $post->description_cyril = $request->input('description_cyril');
        $post->description_ru = $request->input('description_ru');
        $post->description_en = $request->input('description_en');
        $post->body_uz = $request->input('body_uz');
        $post->body_cyril = $request->input('body_cyril');
        $post->body_ru = $request->input('body_ru');
        $post->body_en = $request->input('body_en');
        $post->category_id = $request->input('category_id');
        $post->save();
//        dd($post);


        return redirect()->route('posts.index')
            ->with('success', 'Yangilik O`zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image);
        $post->delete();
        return back()->with('error', 'Yangilik O`chirildi');
    }
}
