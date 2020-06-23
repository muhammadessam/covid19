@extends('admin.layout.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline justify-content-between" action="{{route('admin.village.update',$village)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter a new village ..." value="{{$village['name']}}">
                                    <x-error name="name"></x-error>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection