<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('admin.layout.head')


<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    @endif

     <section class="content">
         
      <div class="container-fluid">
          <center>
            <img src="{{asset('admin/dist/img/moh.png')}}"  alt="User Image">
       
        
        <br>       
       
<h1> Sinaw Hospital </h1>
<h3>
 لجنة التقصي الوبائي   

 <br> Covid-19   
</h3>
<br>
 </center>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
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

    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{\App\Patient::Active()->count()}}</h3>

                <p>ACTIVE</p></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">نشط</a>
            </div>
          </div>
          
              <div class="col-lg-3 col-6">
            <!-- small box -->
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
          
          
              <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{\App\Patient::bands()->count()}}</h3>

                <p>BAND</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">إسوارة</a></a>
            </div>
          </div>
          
          
          
     
      
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

</div>
</body>
</html>
