<?php

namespace App\Http\Controllers\Admin;

use App\Village;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.villages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Village::create($request->all());
        toast('successful', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Village $village
     * @return \Illuminate\Http\Response
     */
    public function show(Village $village)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Village $village
     * @return \Illuminate\Http\Response
     */
    public function edit(Village $village)
    {
        return view('admin.villages.edit', compact('village'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Village $village
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Village $village)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $village->update($request->all());
        toast('successful', 'success');
        return redirect()->route('admin.village.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Village $village
     * @return \Illuminate\Http\Response
     */
    public function destroy(Village $village)
    {
        $village->delete();
        toast('successful', 'success');
        return redirect()->back();
    }
}
