@extends('admin.layout.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1 class="m-0 text-dark">Report</h1>
                    <form class="form-inline justify-content-center" action="{{route('admin.report.index')}}" method="get">
                        <div class="row m-1">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="from" class="mr-1">From: </label>
                                    <input type="date" name="from" id="from" class="form-control" value="{{request('from')}}">
                                </div>
                            </div>
                        </div>

                        <div class="row m-1">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="to" class="mr-1">To: </label>
                                    <input type="date" name="to" id="to" class="form-control" value="{{request('to')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status" class="mr-1">Status: </label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="">All</option>
                                        <option {{request('status') == 'Active' ? 'selected' : ''}} value="Active">Active</option>
                                        <option {{request('status') == 'Cured' ? 'selected' : ''}} value="Cured">Cured</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row m-1">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="banded" class="mr-1">Baned: </label>
                                    <select class="form-control" name="banded" id="banded">
                                        <option value="">All</option>
                                        <option {{request('banded') == 'banded' ? 'selected' : ''}} value="banded">Banded</option>
                                        <option {{request('banded') == 'notBanded' ? 'selected' : ''}} value="notBanded">Not Banded</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="observer_id" class="mr-1">Observer: </label>
                                    <select class="form-control" name="observer_id" id="observer_id">
                                        <option value="">All</option>
                                        @foreach(\App\Observer::all() as $item)
                                            <option {{request('observer_id')==$item['id'] ? 'selected' : '' }} value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="village_id" class="mr-1">Villages: </label>
                                    <select class="form-control" name="village_id" id="village_id">
                                        <option value="">All</option>
                                        @foreach(\App\Village::all() as $item)
                                            <option {{request('village_id')==$item['id'] ? 'selected' : '' }} value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach                                    </select>
                                </div>
                            </div>
                        </div>


                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body overflow-auto">
                        <table id="patients" class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Test</th>
                                <th>Isolation</th>
                                <th>Band</th>
                                <th>Status</th>
                                <th>Village</th>
                                <th>Observer</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{$item['identification']}}</td>
                                    <td>{{$item['name']}}</td>
                                    <td>{{$item['phone']}}</td>
                                    <td>{{$item['test_date']}}</td>
                                    <td>{{$item['isolation_end']}}</td>
                                    <td>
                                        @if($item['band'])
                                            <div class="badge badge-success">Yes</div>
                                        @else
                                            <div class="badge badge-danger">Yes</div>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item['status']=='active')
                                            <div class="badge badge-danger">Active</div>
                                        @else
                                            <div class="badge badge-success">Cured</div>
                                        @endif
                                    </td>
                                    <td>{{$item->village['name']}}</td>
                                    <td>{{$item->observer['name']}}</td>

                                    <td class="d-flex">
                                        <a class="btn btn-primary mr-2" href="{{route('admin.patient.edit', $item)}}"><i class="fa fa-edit"></i></a>
                                        <form action="{{route('admin.patient.destroy', $item)}}" method="post" onsubmit="return confirm('Are you sure ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javascript')
    <x-datatable id="patients" printHead="{{ request('from') ? request('from') : ''}}  ::  {{request('to') ? request('to') : ''}}"></x-datatable>
@endsection