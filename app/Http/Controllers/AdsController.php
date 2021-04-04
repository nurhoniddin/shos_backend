<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adss = Ads::paginate(10);
        return view('ads.index', compact('adss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Ads();

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
        $data->ads_start = $request->input('ads_start');
        $data->ads_end = $request->input('ads_end');

        // $data->image  = $request->input('image');
        $imagePath = request('image')->store('ads', 'public');
        // $img = Image::make(public_path("storage/{$imagePath}"))->fit(2200,850);
        // $img->save();

        // $image= new FileUpload();
        $data->image = $imagePath;

        $data->save();

        return redirect()->route('ads.index')
            ->with('success', 'E\'lon yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ads $ads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads $ads)
    {
        $ads->delete();
        return back()->with('error','E\'lon O`chirildi');
    }
}
