<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{asset('/storage/profile/'.auth()->user()->picture)}}">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'Dashboard' ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 {{ $active == 'Dashboard' ? 'text-primary' : 'text-default' }}"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'Destination' ? 'active' : '' }}" href="{{ route('destinations.index') }}">
                        <i class="ni ni-bullet-list-67 {{ $active == 'Destination' ? 'text-primary' : 'text-default' }}"></i> {{ __('Destination Management') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'News' ? 'active' : '' }}" href="{{ Route('news.index') }}">
                        <i class="ni ni-archive-2 {{ $active == 'News' ? 'text-primary' : 'text-default' }}"></i> {{ __('News Management') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'Package' ? 'active' : '' }}" href="{{ Route('packages.index') }}">
                        <i class="ni ni-bag-17 {{ $active == 'Package' ? 'text-primary' : 'text-default' }}"></i> {{ __('Package Management') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
