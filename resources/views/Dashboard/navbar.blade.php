<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" style="color:#244150" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @auth
        <li class="nav-item">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-danger">Logout</button>
            </form>
        </li>
        @endauth


    </ul>
</nav>
<!-- /.navbar -->