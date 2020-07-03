<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item ">
                <a href="{{route('admin.patient.index')}}" class="nav-link {{request()->routeIs('admin.patient.*') ? 'active' :''}}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Patients
                    </p>
                </a>
            </li>


            <li class="nav-item ">
                <a href="{{route('admin.observer.index')}}" class="nav-link {{request()->routeIs('admin.observer.*') ? 'active' :''}}">
                    <i class="nav-icon fas fa-eye"></i>
                    <p>
                        Observers
                    </p>
                </a>
            </li>

            <li class="nav-item ">
                <a href="{{route('admin.village.index')}}" class="nav-link {{request()->routeIs('admin.village.*') ? 'active' :''}}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        villages
                    </p>
                </a>
            </li>

            <li class="nav-item ">
                <a href="{{route('admin.report.index')}}" class="nav-link {{request()->routeIs('admin.report.*') ? 'active' :''}}">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                        Reports
                    </p>
                </a>
            </li>
            <li class="nav-item align-self-center">
                <form action="{{route('admin.logout')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-flat btn-outline-secondary">Logout</button>
                </form>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->