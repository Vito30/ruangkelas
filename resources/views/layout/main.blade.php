<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <title>@yield('title')</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
  <a class="navbar-brand" href="#"> <b><span>{{ auth()->user()->name }}</span></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="btn btn-primary" href="{{ url('/') }}">Dashboard </a>
      <a class="btn btn-primary" href="{{ url('/ruang') }}">Tabel</a>
      <a class="btn btn-primary" href="{{ url('/user') }}">Daftar Ruangan</a>
      <a class="btn btn-primary" href="{{ url('/kelas') }}">Detail Ruangan</a>
      <a class="btn btn-primary" href="{{ url('/room') }}">Detail Pengguna</a>
      <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-danger my-2 my-sm-0" href="{{ url('/logout') }}">Logout</a>
     </form>
    </div>
  </div>
  </div>
</nav>

    @yield('container')
    @yield('content')
    @yield('scripts')
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>