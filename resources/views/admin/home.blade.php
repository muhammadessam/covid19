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

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3>{{\App\Patient::Omani()->count()}}</h3>

                            <p>Omani</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-flag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3>{{\App\Patient::NoOmani()->count()}}</h3>

                            <p>Arrival</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-plane"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-dark">
                        <div class="inner">
                            <h3>{{\App\Patient::Death()->count()}}</h3>

                            <p>Dead</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-sad-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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