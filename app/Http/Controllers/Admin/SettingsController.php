<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ]);
        Admin::find(auth()->user()->id)->update([
            'password' => Hash::make($request['password'])
        ]);
        toast('Password Saved', 'success')->position('top-end');
        return redirect()->back();
    }
}
