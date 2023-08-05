<?php

namespace Jalaldev\Basicsetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jalaldev\Basicsetting\Models\BasicSetting;

class BasicSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = BasicSetting::where('id', 1)->first();
        if ($setting) {
            return view('basicsetting::basicsettings.edit', compact('setting'));
        } else {
            return view('basicsetting::basicsettings.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting = BasicSetting::where('id', 1)->first();
        if ($setting) {
            $data = $request->all();
            $setting->update($data);
            return back();
        } else {
            $data = $request->all();
            BasicSetting::create($data);
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
