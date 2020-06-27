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
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{\App\Patient::all()->count()}}</h3>
                        <p>TOTAL</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">المجموع</a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-gradient-primary">
                    <div class="inner">
                        <h3>{{\App\Patient::Omani()->count()}}</h3>
                        <p>Omani</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-flag"></i>
                    </div>
                    <a href="#" class="small-box-footer">عماني</a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-gradient-secondary">
                    <div class="inner">
                        <h3>{{\App\Patient::NoOmani()->count()}}</h3>

                        <p>Non-Omani</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-plane"></i>
                    </div>
                    <a href="#" class="small-box-footer">غير عماني</a>
                </div>
            </div>
               <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{\App\Patient::bands()->count()}}</h3>
                        <p>BAND</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-warning"></i>
                    </div>
                    <a href="#" class="small-box-footer">إسوارة</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{\App\Patient::Active()->count()}}</h3>
                        <p>ACTIVE</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-sad"></i>
                    </div>
                    <a href="#" class="small-box-footer">نشط</a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="small-box bg-gradient-success">
                    <div class="inner">
                        <h3>{{\App\Patient::Cured()->count()}}</h3>

                        <p>CURED</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-happy"></i>
                    </div>
                    <a href="#" class="small-box-footer">متعافى</a>
                </div>
            </div>


         
            
                 <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-dark">
                        <div class="inner">
                            <h3>{{\App\Patient::Death()->count()}}</h3>

                            <p>Dead</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-sad-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">متوفى</a>
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