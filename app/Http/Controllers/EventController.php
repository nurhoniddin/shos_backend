<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(10);

        return  view('event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Event $event)
    {

//        $event = Event::find($id);
        if ($request->hasFile('image')) {
//            $request->validate([
//                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//            ]);
            $path = $request->file('image')->store('event','public');
            $event->image = $path;
        }
        $event->title_uz = $request->input('title_uz');
        $event->title_kiril = $request->input('title_kiril');
        $event->title_ru = $request->input('title_ru');
        $event->title_en = $request->input('title_en');
        $event->description_uz = $request->input('description_uz');
        $event->description_kiril = $request->input('description_kiril');
        $event->description_ru = $request->input('description_ru');
        $event->description_en = $request->input('description_en');
        $event->body_uz = $request->input('body_uz');
        $event->body_kiril = $request->input('body_kiril');
        $event->body_ru = $request->input('body_ru');
        $event->body_en = $request->input('body_en');
        $event->address_uz = $request->input('address_uz');
        $event->address_kiril = $request->input('address_kiril');
        $event->address_ru = $request->input('address_ru');
        $event->address_en = $request->input('address_en');
        $event->save();
//        dd($event);


        return redirect()->route('event.index')
            ->with('success', 'Yangi Tadbir Q\'shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('event.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $post = Event::find($id);
        if ($request->hasFile('image')) {
//            $request->validate([
//                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//            ]);
            $path = $request->file('image')->store('events','public');
            $post->image = $path;
        }

        $post->title_uz = $request->input('title_uz');
        $post->title_kiril = $request->input('title_kiril');
        $post->title_ru = $request->input('title_ru');
        $post->title_en = $request->input('title_en');
        $post->description_uz = $request->input('description_uz');
        $post->description_kiril = $request->input('description_kiril');
        $post->description_ru = $request->input('description_ru');
        $post->description_en = $request->input('description_en');
        $post->body_uz = $request->input('body_uz');
        $post->body_kiril = $request->input('body_kiril');
        $post->body_ru = $request->input('body_ruoreac');
        $post->body_en = $request->input('body_en');
        $post->save();
//        dd($post);


        return redirect()->route('posts.index')
            ->with('success', 'Tadbir Yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Event $event)
    {
        if (Storage::disk('public')->delete($event->image)){
            $event->delete();
        }
        return redirect()->route('event.index')
            ->with('error','Muoffaqiyatli O\'chirildi');
    }
}
