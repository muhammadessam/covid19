<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.layout.head')


<body>
<div class="container container-fluid full-height">
    <section class="content">

        <div class="row m-5">
            <div class="col-12 text-center">
                <img src="{{asset('admin/dist/img/moh.png')}}" alt="User Image">
                <h1> Sinaw Hospital </h1>
                <h3>لحنة تقصي الحقائق</h3>
                <h3>Covid-19</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{\App\Patient::all()->count()}}</h3>
                        <p>TOTAL</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">المجموع</a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
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

            <div class="col-lg-4 col-6">
                <div class="small-box bg-gradient-secondary">
                    <div class="inner">
                        <h3>{{\App\Patient::NoOmani()->count()}}</h3>

                        <p>Arrival</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-plane"></i>
                    </div>
                    <a href="#" class="small-box-footer">وافد</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{\App\Patient::Active()->count()}}</h3>
                        <p>ACTIVE</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
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
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">متعافى</a>
                </div>
            </div>


            <div class="col-lg-4 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{\App\Patient::bands()->count()}}</h3>
                        <p>BAND</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">إسوارة</a>
                </div>
            </div>
        </div>


    </section>

</div>
</body>
</html>
