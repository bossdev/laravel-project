<div class="col-12 p-0 menuheader">
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav mr-auto">
            <li class="navbar-brand p-0">
                <img src="{{ asset('images/palm.png') }}" width="40">
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">About</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="decoration-none text-dark mr-4">
                    <i class="nav-link fas fa-user-circle font-16 align-middle p-1"></i>
                    <span>Register</span>
                </a>
                <a href="{{ route('get.login') }}" class="decoration-none text-dark">
                    <i class="nav-link fas fa-lock font-16 align-middle p-1"></i>
                    <span>Login</span>
                </a>
            </li>
        </ul>
    </nav>
</div>