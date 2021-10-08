<nav class="navbar navbar-expand-sm navbar-dark bg-primary flex-nowrap">
    <div class="container">
      <div class="d-flex flex-grow-1">
          <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
          <a class="navbar-brand d-none d-lg-inline-block" href="/">
            <img src="{{url('/assets/images/logo.svg')}}" alt="Logo" alt="logo" class="logo-img">
          </a>
          <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="/">
              <img src="//via.placeholder.com/40?text=LOGO" alt="logo">
          </a>
          <div class="w-100 text-right">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
          </div>
      </div>
        <div class="d-flex">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item">
                    <a href="/" class="nav-link m-2 menu-item nav-active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link m-2 menu-item">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link m-2 menu-item">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link m-2 menu-item">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>