<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manages = Management::paginate(10);
        return view('management.index', compact('manages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Management $management)
    {

        //        $management = Event::find($id);
        if ($request->hasFile('image')) {
            //            $request->validate([
            //                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            //            ]);
            $path = $request->file('image')->store('management', 'public');
            $management->image = $path;
        }
        $management->fname_uz = $request->input('fname_uz');
        $management->fname_kiril = $request->input('fname_kiril');
        $management->fname_ru = $request->input('fname_ru');
        $management->fname_en = $request->input('fname_en');
        $management->birthday_uz = $request->input('birthday_uz');
        $management->birthday_kiril = $request->input('birthday_kiril');
        $management->birthday_ru = $request->input('birthday_ru');
        $management->birthday_en = $request->input('birthday_en');
        $management->education_uz = $request->input('education_uz');
        $management->education_kiril = $request->input('education_kiril');
        $management->education_ru = $request->input('education_ru');
        $management->education_en = $request->input('education_en');
        $management->work_ex_uz = $request->input('work_ex_uz');
        $management->work_ex_kiril = $request->input('work_ex_kiril');
        $management->work_ex_ru = $request->input('work_ex_ru');
        $management->work_ex_en = $request->input('work_ex_en');
        $management->save();
//            dd($management);


        return redirect()->route('management.index')
            ->with('success', 'Qo\'shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Management $management
     * @return \Illuminate\Http\Response
     */
    public function show(Management $management)
    {
        return view('management.show', compact('management'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Management $management
     * @return \Illuminate\Http\Response
     */
    public function edit(Management $management)
    {
        return view('management.edit', compact('management'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Management $management
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Management $management)
    {
        //        $staff = Event::find($id);
        if ($request->hasFile('image')) {
//            $request->validate([
//                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//            ]);
            $path = $request->file('image')->store('staff', 'public');
            $management->image = $path;
        }
        $management->fname_uz = $request->input('fname_uz');
        $management->fname_kiril = $request->input('fname_kiril');
        $management->fname_ru = $request->input('fname_ru');
        $management->fname_en = $request->input('fname_en');
        $management->birthday_uz = $request->input('birthday_uz');
        $management->birthday_kiril = $request->input('birthday_kiril');
        $management->birthday_ru = $request->input('birthday_ru');
        $management->birthday_en = $request->input('birthday_en');
        $management->education_uz = $request->input('education_uz');
        $management->education_kiril = $request->input('education_kiril');
        $management->education_ru = $request->input('education_ru');
        $management->education_en = $request->input('education_en');
        $management->work_ex_uz = $request->input('work_ex_uz');
        $management->work_ex_kiril = $request->input('work_ex_kiril');
        $management->work_ex_ru = $request->input('work_ex_ru');
        $management->work_ex_en = $request->input('work_ex_en');
        $management->save();
        // $management->save();
//        dd($staff);


        return redirect()->route('management.index')
            ->with('success', 'Yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Management $management
     * @return \Illuminate\Http\Response
     */
    public function destroy(Management $management)
    {
        Storage::disk('public')->delete($management->image);
            $management->delete();

        return redirect()->route('management.index')
            ->with('error', 'Muoffaqiyatli O\'chirildi');
    }
}
