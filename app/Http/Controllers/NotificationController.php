<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notification = Notification::paginate(10);
        return view('notification.index', compact('notification'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notification = Notification::all();
        return view('notification.create', compact('notification'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Notification();

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

        return redirect()->route('notification.index')
            ->with('success', 'E\'lon yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        return view('notification.edit',compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {

        if ($request->hasFile('image')) {
//            $request->validate([
//                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//            ]);
            $path = $request->file('image')->store('ads', 'public');
            $notification->image = $path;
        }

        $notification->title_uz = $request->input('title_uz');
        $notification->title_cyril = $request->input('title_cyril');
        $notification->title_ru = $request->input('title_ru');
        $notification->title_en = $request->input('title_en');
        $notification->description_uz = $request->input('description_uz');
        $notification->description_cyril = $request->input('description_cyril');
        $notification->description_ru = $request->input('description_ru');
        $notification->description_en = $request->input('description_en');
        $notification->body_uz = $request->input('body_uz');
        $notification->body_cyril = $request->input('body_cyril');
        $notification->body_ru = $request->input('body_ru');
        $notification->body_en = $request->input('body_en');
        $notification->ads_start = $request->input('ads_start');
        $notification->ads_end = $request->input('ads_end');

        $notification->save();

        return redirect()->route('notification.index')
            ->with('success', 'E\'lon Yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        Storage::disk('public')->delete($notification->image);
        $notification->delete();
        return back()->with('error','E\'lon O`chirildi');
    }
}
