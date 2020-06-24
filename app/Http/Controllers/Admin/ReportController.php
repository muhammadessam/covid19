<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $data = Patient::all();
        if ($request['from'] && $request['to'])
            $data = $data->whereBetween('test_date', [date($request['from']), date($request['to'])]);
        elseif ($request['from'])
            $data = $data->where('test_date', '>=', date($request['from']));
        elseif ($request['to'])
            $data = $data->where('test_date', '<=', date($request['to']));
        if ($request['status'])
            $data = $data->where('status', $request['status']);
        if ($request['banded'])
            $data = $data->where('band', $request['banded'] == 'banded');
        if ($request['observer_id'])
            $data = $data->where('observer_id', $request['observer_id']);
        if ($request['village_id'])
            $data = $data->where('village_id', $request['village_id']);

        return view('admin.reports.index', compact('data'));
    }
}
