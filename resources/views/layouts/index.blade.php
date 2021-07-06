<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="collapse container navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-link text-dark font-weight-normal" href="{{ url('/pendataan') }}">Barang</a>
          <a class="nav-link text-dark font-weight-normal" href="{{ url('/pendataan/jenis-barang') }}">Jenis Barang</a>
        </div>
        <div>
            <a class=" btn  btn-danger" href="{{ route('logout') }}">Logout</a>
        </div>
      </div>
        {{--<ul class="nav">--}}
          {{--<li class="nav-item">--}}
                {{--<a class=" btn  btn-danger" href="{{ route('logout') }}">Logout</a>--}}
          {{--</li>--}}
        {{--</ul>--}}
    </nav>
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
    {{--<div class="container">--}}
        {{--<a class="navbar-brand" href="{{ url('/pendataan') }}">Pendataan</a>--}}
        {{--<a class="navbar-item" href="{{ url('/pendataan/jenis-barang') }}">Jenis Barang</a>--}}

    {{--</div>--}}
{{--</nav>--}}
<div class="container mt-5 p-3 bg-light shadow-sm">
    @yield('content')
</div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
