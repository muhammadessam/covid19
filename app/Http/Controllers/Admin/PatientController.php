<?php

namespace App\Http\Controllers\Admin;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.patients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
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
            'identification' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'test_date' => 'required',
            'isolation_end' => 'required',
            'band' => 'required',
            'village_id' => 'required',
            'observer_id' => 'required',
        ]);
        Patient::create($request->all());
        toast('successful', 'success');
        return redirect()->route('admin.patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'identification' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'test_date' => 'required',
            'isolation_end' => 'required',
            'band' => 'required',
            'village_id' => 'required',
            'observer_id' => 'required',
        ]);
        $patient->update($request->all());
        toast('successful', 'success');
        return redirect()->route('admin.patient.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        toast('successful', 'success');
        return redirect()->back();
    }
}
