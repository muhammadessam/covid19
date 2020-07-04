@extends('admin.layout.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="{{route('admin.settings.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="password">New Password: </label>
                                <input type="password" name="password" class="form-control">
                                <x-error name="password"></x-error>
                            </div>
                            <div class="form-group">
                                <label for="password">confirm Password: </label>
                                <input type="password" name="password_confirmation" class="form-control">
                                <x-error name="password_confirmation"></x-error>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection