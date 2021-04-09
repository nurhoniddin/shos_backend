<?php

namespace App\Http\Controllers;

use App\Models\Gcategory;
use Illuminate\Http\Request;

class GcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gcategory = Gcategory::paginate(10);
        return view('gcategory.index', compact('gcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new Gcategory();

         $data->name  = $request->input('name');

         // $data->image  = $request->input('image');
         $imagePath = request('image')->store('gcategory','public');
       // $img = Image::make(public_path("storage/{$imagePath}"))->fit(2200,850);
       // $img->save();

         // $image= new FileUpload();
         $data->image = $imagePath;


         $data->save();

         return redirect()->route('gcategory.index')
           ->with('success','Kategory yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gcategory  $gcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Gcategory $gcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gcategory  $gcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Gcategory $gcategory)
    {
        return view('gcategory.edit',compact('gcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gcategory  $gcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Gcategory::find($id);
        if($request->hasFile('image')){
//            $request->validate([
//                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//            ]);
            $path = $request->file('image')->store('gcategory','public');
            $post->image = $path;
        }

        $post->name  = $request->input('name');
        $post->save();

        return redirect()->route('gcategory.index')
            ->with('success','Kategory O`zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gcategory  $gcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gcategory $gcategory)
    {
        Storage::disk('public')->delete($gcategory->image);
        $gcategory->delete();
        return back()->with('error','Kategory O`chirildi');
    }
}
