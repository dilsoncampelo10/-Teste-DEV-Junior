<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-body-tertiary mb-3" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Conted.tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('home')?'active':''}}" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('insert.customer')?'active':''}}" href="{{route('insert.customer')}}">Cadastrar cliente</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('show.customers')?'active':''}}" href="{{route('show.customers')}}">Visualizar clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if(session('success'))
    <div class="alert alert-success container mt-3" role="alert">
        {{session('success')}}
    </div>
    @endif
    @if(session('failed'))
    <div class="alert alert-danger container mt-3" role="alert">
        {{session('failed')}}
    </div>
    @endif

    @yield('content')

    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>