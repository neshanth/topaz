@include('Dashboard.header')
@include('Dashboard.navbar')
@include('Dashboard.sidebar')
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset("images/logo.png") }}" alt="Logo" height="60" width="60">
    </div>


    @auth
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper py-5">
        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row justify-content-center">
                    @yield('content')
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endauth

    @guest
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper py-5">
        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row justify-content-center">
                    @yield('content')
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.content -->
    </div>
    @endguest

    @include('Dashboard.footer')