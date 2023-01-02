<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Livewire') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">
    @livewireStyles

</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel Livewire') }} --}}
                    Showroom
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        {{-- @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif --}}

                        {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif --}}
                        @else

                        <li class="nav-item">
                            <a class="nav-link {{(Route::currentRouteName() == 'home') ? 'active' : ''}}"
                                href="{{ route('home') }}">{{ __('Dashboard')}}</a>
                        </li>

                        @can('user-list')
                        <li class="nav-item">
                            <a class="nav-link {{(Route::currentRouteName() == 'admin.users') ? 'active' : ''}}"
                                href="{{ route('admin.users') }}">{{ __('Manage Users')}}</a>
                        </li>
                        @endcan

                        @can('role-list')
                        <li class="nav-item">
                            <a class="nav-link {{(Route::currentRouteName() == 'admin.roles') ? 'active' : ''}}"
                                href="{{ route('admin.roles') }}">{{ __('Manage Roles')}}</a>
                        </li>
                        @endcan

                        @can('invoice-list')
                        <li class="nav-item">
                            <a class="nav-link {{(Route::currentRouteName() == 'admin.invoices') ? 'active' : ''}}"
                                href="{{ route('admin.invoices') }}">{{ __('Manage Invoices')}}</a>
                        </li>
                        @endcan


                        <li class="nav-item dropdown ms-md-4">
                            <a id="navbarDropdown" class="btn btn-outline-dark dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="bi bi-person me-1"></i>{{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-in-right me-1"></i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @livewireScripts

    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#user_modal').modal('hide');
        });
        window.livewire.on('driverStore', () => {
            $('#driver_modal').modal('hide');
        });
        window.livewire.on('role_modal_hide', () => {
            $('#role_modal').modal('hide');
        });
    </script>

    <script>
        function deleteConfirmation(listner = null, id = null, type = null) {
            if (listner && id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "If deleted, you will not be able to recover this record.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        if (type) {
                            window.livewire.emit(listner, id, type);
                        } else {
                            window.livewire.emit(listner, id);
                        }
                    }
                });
            }
        }

        window.addEventListener('swal:modal', event => {
            swal.fire({
                title: event.detail.title,
                text: event.detail.text,
                icon: event.detail.type,
            });
        });
    </script>
</body>

</html>
