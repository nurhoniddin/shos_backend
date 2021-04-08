<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::paginate(10);

        return view('staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Staff $staff)
    {

//        $staff = Event::find($id);
        if ($request->hasFile('image')) {
//            $request->validate([
//                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//            ]);
            $path = $request->file('image')->store('staff', 'public');
            $staff->image = $path;
        }
        $staff->fname_uz = $request->input('fname_uz');
        $staff->fname_kiril = $request->input('fname_kiril');
        $staff->fname_ru = $request->input('fname_ru');
        $staff->fname_en = $request->input('fname_en');
        $staff->position_uz = $request->input('position_uz');
        $staff->position_kiril = $request->input('position_kiril');
        $staff->position_ru = $request->input('position_ru');
        $staff->position_en = $request->input('position_en');
        $staff->phone_uz = $request->input('phone_uz');
        $staff->phone_kiril = $request->input('phone_kiril');
        $staff->phone_ru = $request->input('phone_ru');
        $staff->phone_en = $request->input('phone_en');
        $staff->save();
//        dd($staff);


        return redirect()->route('staff.index')
            ->with('success', 'Yangi Xodim Q\'shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staff.show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staff.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {

//        $staff = Event::find($id);
        if ($request->hasFile('image')) {
//            $request->validate([
//                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//            ]);
            $path = $request->file('image')->store('staff', 'public');
            $staff->image = $path;
        }
        $staff->fname_uz = $request->input('fname_uz');
        $staff->fname_kiril = $request->input('fname_kiril');
        $staff->fname_ru = $request->input('fname_ru');
        $staff->fname_en = $request->input('fname_en');
        $staff->position_uz = $request->input('position_uz');
        $staff->position_kiril = $request->input('position_kiril');
        $staff->position_ru = $request->input('position_ru');
        $staff->position_en = $request->input('position_en');
        $staff->phone_uz = $request->input('phone_uz');
        $staff->phone_kiril = $request->input('phone_kiril');
        $staff->phone_ru = $request->input('phone_ru');
        $staff->phone_en = $request->input('phone_en');
        $staff->save();
//        dd($staff);


        return redirect()->route('staff.index')
            ->with('success', 'Yangi Tadbir Yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
         Storage::disk('public')->delete($staff->image);
            $staff->delete();
             return redirect()->route('staff.index')
                 ->with('error','Muoffaqiyatli O\'chirildi');
    }
}
