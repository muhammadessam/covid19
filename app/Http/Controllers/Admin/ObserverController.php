<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Observer;
use Illuminate\Http\Request;

class ObserverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.observers.index');
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
        Observer::create($request->all());
        toast('successful', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Observer $observer
     * @return \Illuminate\Http\Response
     */
    public function show(Observer $observer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Observer $observer
     * @return \Illuminate\Http\Response
     */
    public function edit(Observer $observer)
    {
        return view('admin.observers.edit', compact('observer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Observer $observer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Observer $observer)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $observer->update($request->all());
        toast('successful', 'success');
        return redirect()->route('admin.observer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Observer $observer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Observer $observer)
    {
        $observer->delete();
        toast('successful', 'success');
        return redirect()->back();
    }
}
