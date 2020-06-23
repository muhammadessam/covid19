@extends('admin.layout.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Villages</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline justify-content-between" action="{{route('admin.village.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter a new village ...">
                                    <x-error name="name"></x-error>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table id="village" class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Village::all() as $index=>$item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item['name']}}</td>
                                <td class="d-flex">
                                    <a class="btn btn-primary mr-2" href="{{route('admin.village.edit', $item)}}"><i class="fa fa-edit"></i></a>
                                    <form action="{{route('admin.village.destroy', $item)}}" method="post" onsubmit="return confirm('Are you sure ?')">
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
@endsection
@section('javascript')
    <x-datatable id="village"></x-datatable>
@endsection