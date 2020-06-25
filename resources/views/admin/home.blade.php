@extends('admin.layout.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{\App\Patient::all()->count()}}<sup style="font-size: 20px"></sup></h3>

                            <p>Total</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{\App\Patient::Active()->count()}}</h3>

                            <p>Active</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bug"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-success">
                        <div class="inner">
                            <h3>{{\App\Patient::Cured()->count()}}</h3>

                            <p>Cured</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bug"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3>{{\App\Patient::Bands()->count()}}</h3>

                            <p>Banded</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bug"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Omani Patients</h3>
                        </div>
                        <div class="card-body overflow-auto">
                            <table id="omani" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Test</th>
                                    <th>Isolation</th>
                                    <th>Band</th>
                                    <th>Status</th>
                                    <th>Omani</th>
                                    <th>Village</th>
                                    <th>Observer</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Patient::Omani() as $item)
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
                                                <div class="badge badge-danger">No</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($item['status'])
                                                <div class="badge badge-danger">Active</div>
                                            @else
                                                <div class="badge badge-success">Cured</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($item['omani'])
                                                <div class="badge badge-success">Omani</div>
                                            @else
                                                <div class="badge badge-danger">Not Omani</div>
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
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">None Omani Patients</h3>
                        </div>
                        <div class="card-body overflow-auto">
                            <table id="noOmani" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Test</th>
                                    <th>Isolation</th>
                                    <th>Band</th>
                                    <th>Status</th>
                                    <th>Omani</th>
                                    <th>Village</th>
                                    <th>Observer</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Patient::NoOmani() as $item)
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
                                                <div class="badge badge-danger">No</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($item['status'])
                                                <div class="badge badge-danger">Active</div>
                                            @else
                                                <div class="badge badge-success">Cured</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($item['omani'])
                                                <div class="badge badge-success">Omani</div>
                                            @else
                                                <div class="badge badge-danger">Not Omani</div>
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
    </div>
@endsection
@section('javascript')
    <x-datatable id="omani"></x-datatable>
    <x-datatable id="noOmani"></x-datatable>
@endsection