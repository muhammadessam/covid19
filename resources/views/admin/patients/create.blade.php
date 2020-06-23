@extends('admin.layout.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Patients</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{route('admin.patient.index')}}" class="btn btn-primary"><i class="fa fa-list"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.patient.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="id">ID</label>
                                    <input class="form-control" type="text" name="identification" id="id" value="{{old('identification')}}">
                                    <x-error name="identification"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">
                                    <x-error name="name"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" type="tel" name="phone" id="phone" value="{{old('phone')}}">
                                    <x-error name="phone"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                        <option {{old('status') == 'active' ? 'selected': ''}} value="active">Active</option>
                                        <option {{old('status') == 'cured' ? 'selected': ''}} value="cured">Cured</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="test_date">Test Date</label>
                                    <input class="form-control" type="date" name="test_date" id="test_date">
                                    <x-error name="test_date"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="isolation_end">Isolation Date</label>
                                    <input class="form-control" type="date" name="isolation_end" id="isolation_end">
                                    <x-error name="isolation_end"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">Band</label>
                                    <select class="form-control" name="band">
                                        <option {{old('band') == 'active' ? 'selected': ''}} value="1">yes</option>
                                        <option {{old('band') == 'cured' ? 'selected': ''}} value="0">no</option>
                                    </select>
                                    <x-error name="band"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">village </label>
                                    <select class="form-control" name="village_id">
                                        @foreach(\App\Village::all() as $item)
                                            <option {{old('village_id') == $item['id'] ? 'selected': ''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                    <x-error name="band"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">Observer </label>
                                    <select class="form-control" name="observer_id">
                                        @foreach(\App\Observer::all() as $item)
                                            <option {{old('observer_id ') == $item['id'] ? 'selected': ''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                    <x-error name="observer_id "></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection